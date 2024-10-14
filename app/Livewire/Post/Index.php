<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class Index extends Component
{
    public function render()
    {
        $posts = Post::all();

        $categories = Category::whereHas('posts', function ($query) {
            $query->published();
        })->take(10)->get();

        return view('livewire.post.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
