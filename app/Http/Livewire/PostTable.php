<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostTable extends Component
{
    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('livewire.post-table',['posts' => $posts]);
    }
}
