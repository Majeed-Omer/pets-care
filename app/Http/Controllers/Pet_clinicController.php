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
        return view('pages.pet_clinic.pet_clinic_page', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'name'         =>  'required',
                'email'         =>  'required',
                'phone_number'   =>  'required',
                'address'        =>  'required',
                'location'        =>  'required',
                'veterinarian'    =>   'required'
            ]);
    
            $pet_clinic = new Pet_clinic;
    
            $pet_clinic->name = $request->name;
            $pet_clinic->email = $request->email;
            $pet_clinic->phone_number = $request->phone_number;
            $pet_clinic->address = $request->address;
            $pet_clinic->location = $request->location;
            $pet_clinic->veterinarian = $request->veterinarian;
            
            $pet_clinic->save();
    
            return redirect()->route('index')->with('success', 'Pet_clinic Added successfully.');
            
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


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet_clinic $pet_clinic)
    {

        $pet_clinic = Pet_clinic::find($request->hidden_id);
        $pet_clinic->name = $request->name;
        $pet_clinic->email = $request->email;
        $pet_clinic->phone_number = $request->phone_number;
        $pet_clinic->address = $request->address;
        $pet_clinic->location = $request->location;
        $pet_clinic->veterinarian = $request->veterinarian;
        $pet_clinic->save();

        return redirect()->route('index')->with('success', 'Pet_clinic Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet_clinic $pet_clinic)
    {
        $pet_clinic->delete();

        return redirect()->route('index')->with('success', 'Pet_clinic Data deleted successfully');
    }

}
