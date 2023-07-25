<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostEdit extends Component
{
    public $post_id;
    public $title;
    public $description;

    public function mount($post){

        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->description = $post->description;

    }
    public function render()
    {
        return view('livewire.post-edit');
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:3'
        ]);

        $storePost = Post::where('id', $this->post_id)->update([
            'title' => $this->title,
            'description' => $this->description
        ]);

        if($storePost){
            // Clear Form Update
            $this->title = NULL;
            $this->description = NULL;

            redirect('/posts')->with('success','Update Data Success');
        } else {
            session()->flash('failed', 'Update Data Failed');
        }

    }
}
