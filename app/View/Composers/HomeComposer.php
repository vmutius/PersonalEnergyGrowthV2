<?php

namespace App\View\Composers;

use App\Models\Post;
use App\Models\Glossary;

use Illuminate\View\View;

class HomeComposer
{
    public function __construct()
    {
        //
    }

    public function compose(View $view)
    {
        $view->with('posts', Post::published()->featured()->latest('published_at')->take(3)->get(),);
    }
}
