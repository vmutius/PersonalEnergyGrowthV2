<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|unique:posts|min:5')]
    public string $title = '';

    #[Validate('required|unique:posts|min:5')]
    public string $slug = '';
 
    #[Validate('required|min:5')]
    public string $body = '';

    
}
