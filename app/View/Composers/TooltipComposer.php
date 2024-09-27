<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Glossar;

class TooltipComposer
{
    public function compose(View $view)
    {
        if (!$view->offsetExists('glossaryTerms')) {
            $glossaryTerms = cache()->remember('glossary_terms', 60, function () {
                return Glossar::all();
            });
            $view->with('glossaryTerms', $glossaryTerms);
        }
    }
}
