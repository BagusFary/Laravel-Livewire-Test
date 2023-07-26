<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostTable extends Component
{
    protected $listeners = ['postAdded' => 'render'];
    
    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('livewire.post-table',['posts' => $posts]);
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $postDelete = $post->delete();
        if($postDelete){
            redirect('/posts')->with('success', 'Delete Post Success');
        } else {
            redirect('/posts')->with('failed', 'Delete Post Failed');
        }
        
    }
}
