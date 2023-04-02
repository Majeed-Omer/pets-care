<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Animal::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'species'         =>  'required',
            'birth_date'         =>  'required',
            'notes'         =>  'required',
            'images'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->images->getClientOriginalExtension();

        request()->images->move(public_path('images'), $file_name);

        $animal = new Animal;

        $animal->name = $request->name;
        $animal->species = $request->species;
        $animal->birth_date = $request->birth_date;
        $animal->notes = $request->notes;
        $animal->images = $file_name;

        $animal->save();

        return redirect()->route('animals.index')->with('success', 'Animal Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('edite', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'name'      =>  'required',
            'species'     =>  'required',
            'birth_date'     =>  'required',
            'notes'     =>  'required',
            'images'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $images = $request->hidden_images;

        if($request->images != '')
        {
            $images = time() . '.' . request()->images->getClientOriginalExtension();

            request()->images->move(public_path('images'), $images);
        }

        $animal = Animal::find($request->hidden_id);

        $animal->name = $request->name;

        $animal->species = $request->species;

        $animal->birth_date = $request->birth_date;

        $animal->notes = $request->notes;

        $animal->images = $images;

        $animal->save();

        return redirect()->route('animals.index')->with('success', 'Animal Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animals.index')->with('success', 'Animal Data deleted successfully');
    }
}
