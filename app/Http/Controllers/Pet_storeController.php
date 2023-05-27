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
        $data = Pet_store::all();
        return view('pages.pet_store.pet_store_page', compact('data'));
    }
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'name'         =>  'required',
                'owner'         =>   'required',
                'email'         =>  'required',
                'phone_number'   =>  'required',
                'address'        =>  'required',
                'location'        =>  'required',
            ]);
    
            $pet_store = new Pet_store;
    
            $pet_store->name = $request->name;
            $pet_store->owner = $request->owner;
            $pet_store->email = $request->email;
            $pet_store->phone_number = $request->phone_number;
            $pet_store->address = $request->address;
            $pet_store->location = $request->location;
            
            $pet_store->save();
    
            return redirect()->route('index')->with('success', 'pet_store Added successfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet_store  $pet_store
     * @return \Illuminate\Http\Response
     */
    public function show(Pet_store $pet_store)
    {
        return view('show', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet_store $pet_store)
    {

        $pet_store = Pet_store::find($request->hidden_id);
        $pet_store->name = $request->name;
        $pet_store->owner = $request->owner;
        $pet_store->email = $request->email;
        $pet_store->phone_number = $request->phone_number;
        $pet_store->address = $request->address;
        $pet_store->location = $request->location;
        $pet_store->save();

        return redirect()->route('index')->with('success', 'pet_store Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet_store $pet_store)
    {
        $pet_store->delete();

        return redirect()->route('index')->with('success', 'pet_store Data deleted successfully');
    }
}
