<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Show extends Component
{
    public Post $post;

    public function mount(Post $post) {
        $this->post = $post;
    }
    
    public function render()
    {
        return view('livewire.post.show');
    }
}
