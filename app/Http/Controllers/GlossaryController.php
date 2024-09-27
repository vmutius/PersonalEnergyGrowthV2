<?php

namespace App\Http\Controllers;

use App\Models\Glossary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GlossaryController extends Controller
{
    public function index()
    {
        $glossaryTerms = Glossary::all()->groupBy(function ($item) {
            return strtoupper(substr($item->term, 0, 1));
        });
        return view('glossary', compact('glossaryTerms'));
    }

    public function showDefinition($term)
    {
        Log::info("Controller" . $term);
        return Glossary::where('term', $term)->pluck('definition');
    }
}
