<?php

namespace App\Http\Controllers;

use App\Models\Pet_clinic;
use Illuminate\Http\Request;

class Pet_clinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pet_clinic::all();
        return view('pages.pet_clinic', compact('data'));
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet_clinic  $stolen_missing
     * @return \Illuminate\Http\Response
     */
    public function show(Pet_clinic $pet_clinic)
    {
        return view('show', compact('data'));
    }
}
