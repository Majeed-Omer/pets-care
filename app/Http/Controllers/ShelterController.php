<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Shelter::all();
        return view('pages.shelter', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Shelter $shelter)
    {
        return view('show', compact('data'));
    }

}
