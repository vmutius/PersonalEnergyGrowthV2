<?php

namespace App\Livewire\Glossar;

use Livewire\Component;
use App\Models\Glossar;

class Show extends Component
{
   
    
    public function render()
    {
        $glossaryTerms = Glossar::all()->groupBy(function ($item) {
            return strtoupper(substr($item->term, 0, 1));
        });
        return view('livewire.glossar.show', [
            'glossaryTerms' => $glossaryTerms,
        ]);
    }
}
