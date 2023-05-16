<?php

namespace App\Http\Controllers;

use App\Models\Species;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Species::all();
            return view('pages.home.animal-images.animal_images_page', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::check()){

            $request->validate([
                'species_name'         =>  'required',
                'pet_name'         =>  'required',
                'birth_date'         =>  'required',
                'images'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
                'notes'         =>  'required'
            ]);

            $species_count = Species::where('user_id', Auth::id())->count();

            if ($species_count >= 3  && Auth::id() !== 1) {
                // If the user has already added 3 species, redirect with an error message
                return redirect()->back()->withErrors(['You cannot add more than 3 species.']);
            }
    
            $file_name = time() . '.' . request()->images->getClientOriginalExtension();
    
            request()->images->move(public_path('images'), $file_name);
    
            $species = new Species;
    
            $species->species_name = $request->species_name;
            $species->pet_name = $request->pet_name;
            $species->birth_date = $request->birth_date;
            $species->state = $request->state;
            $species->notes = $request->notes;
            $species->images = $file_name;
            $species->user_id = Auth::id();
    
            $species->save();
    
            return redirect()->route('index')->with('success', 'Animal Added successfully.');
            } else {
                return redirect("login")->withSuccess('Opps! You do not have account');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Species $species)
    {
        return view('show', compact('species'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Species $species)
    {
     

        $images = $request->hidden_images;

        if($request->images != '')
        {
            $images = time() . '.' . request()->images->getClientOriginalExtension();

            request()->images->move(public_path('images'), $images);
        }

        $species = Species::find($request->hidden_id);
        $species->species_name = $request->species_name;
        $species->pet_name = $request->pet_name;
        $species->birth_date = $request->birth_date;
        $species->state = $request->state;
        $species->notes = $request->notes;
        $species->images = $images;
        $species->save();

        return redirect()->route('index')->with('success', 'Animal Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Species $species)
    {
        $species->delete();

        return redirect()->route('index')->with('success', 'Animal Data deleted successfully');
    }


public function approve(Request $request, $id)
{
    $species = Species::findOrFail($id);
    $species->approval = $request->input('approval');
    $species->save();
    return redirect()->back();
}

public function reject(Request $request, $id)
    {
    $species = Species::findOrFail($id);
    $species->approval = $request->input('approval');
    $species->save();
    $species->delete();
    return redirect('admin');
    }
}
