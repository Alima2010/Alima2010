<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function liste_actualite()
    {
        return view('pages.admin.actualites');
    }
}
