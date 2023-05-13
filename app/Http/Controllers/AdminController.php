<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Models\stolen_missing;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $species = Species::where('approval', 0)->get();
        $stolen_missings = stolen_missing::where('approval', 0)->get();
        return view('admin', compact('species'), compact('stolen_missings'));
    }


}
