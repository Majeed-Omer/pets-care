<?php

namespace App\Http\Controllers;

use App\Models\Pet_store;
use Illuminate\Http\Request;

class Pet_storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pet_store::latest()->paginate(5);

        return view('pages.pet_store', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet_store  $stolen_missing
     * @return \Illuminate\Http\Response
     */
    public function show(Pet_store $pet_store)
    {
        return view('show', compact('data'));
    }
}
