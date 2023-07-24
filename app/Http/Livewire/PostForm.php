<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class PostForm extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.post-form');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:3'
        ]);

        $storePost = Post::create([
            'title' => $this->title,
            'description' => $this->description
        ]);

        if($storePost){
            // Clear Form Input
            $this->title = NULL;
            $this->description = NULL;

            session()->flash('success', 'Input Data Success!');
        } else {
            session()->flash('failed', 'Input Data Failed');
        }

    }
}
