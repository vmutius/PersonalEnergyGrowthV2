<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Livewire\Forms\PostForm;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public PostForm $form;

    public bool $success = false;

    public function saveNewPost(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->form->title,
            'slug' => $this->form->slug,
            'body' => $this->form->body,
            'user_id' => Auth::check() ? Auth::id() : null,
        ]);

        $this->success = true;

        $this->reset('form.title', 'form.body');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
