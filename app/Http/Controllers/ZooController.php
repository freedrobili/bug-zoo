<?php

namespace App\Http\Controllers;

use App\Support\BugCatalog;
use Illuminate\View\View;

class ZooController extends Controller
{
    public function __invoke(BugCatalog $catalog): View
    {
        return view('zoo.index', [
            'bugs' => $catalog->all(),
            'categories' => $catalog->categories(),
        ]);
    }

    public function planets(): View
    {
        return view('zoo.planets');
    }
}
