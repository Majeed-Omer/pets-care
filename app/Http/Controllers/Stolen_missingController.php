<?php

namespace App\Http\Controllers;

use App\Models\Stolen_missing;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Session;
use App\Models\User;
// use Hash;

class Stolen_missingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Stolen_missing::all();
        return view('pages.missing-pets.missing_pets_page', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
        $request->validate([
            'reward'          =>  'required',
            'email'         =>  'required',
            'phone_number'     =>  'required',
            'stolen_lost_date'    =>  'required',
            'description'         =>  'required',
            'picture'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
        ]);

        
        $stolen_missing_count = Stolen_missing::where('user_id', Auth::id())->count();

        if ($stolen_missing_count >= 3  && Auth::id() !== 1) {
            // If the user has already added 3 species, redirect with an error message
            return redirect()->back()->withErrors(['You cannot add more than 3 stolen_missing_count.']);
        }

        $file_name = time() . '.' . request()->picture->getClientOriginalExtension();

        request()->picture->move(public_path('picture'), $file_name);

        $stolen_missing = new Stolen_missing;

        $stolen_missing->reward = $request->reward;
        $stolen_missing->email = $request->email;
        $stolen_missing->phone_number = $request->phone_number;
        $stolen_missing->stolen_lost_date = $request->stolen_lost_date;
        $stolen_missing->pet_case = $request->pet_case;
        $stolen_missing->description = $request->description;
        $stolen_missing->picture = $file_name;
        $stolen_missing->user_id = Auth::id();

        $stolen_missing->save();

        return redirect()->route('stolen_missing.index')->with('success', 'Animal Added successfully.');
    } else {
        return redirect("login")->withSuccess('Opps! You do not have account');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stolen_missing  $stolen_missing
     * @return \Illuminate\Http\Response
     */
    public function show(Stolen_missing $stolen_missing)
    {
        return view('show', compact('stolen_missing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stolen_missing  $stolen_missing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stolen_missing $stolen_missing)
    {
        
        $picture = $request->hidden_picture;

        if($request->picture != '')
        {
            $picture = time() . '.' . request()->picture->getClientOriginalExtension();

            request()->picture->move(public_path('picture'), $picture);
        }

        $stolen_missing = Stolen_missing::find($request->hidden_id);

        $stolen_missing->reward = $request->reward;

        $stolen_missing->email = $request->email;

        $stolen_missing->phone_number = $request->phone_number;

        $stolen_missing->stolen_lost_date = $request->stolen_lost_date;

        $stolen_missing->pet_case = $request->pet_case;

        $stolen_missing->description = $request->description;

        $stolen_missing->picture = $picture;
        
        $stolen_missing->save();
        return redirect()->route('stolen_missing.index')->with('success', 'Animal Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stolen_missing  $stolen_missing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stolen_missing $stolen_missing)
    {
        $stolen_missing->delete();

        return redirect()->route('stolen_missing.index')->with('success', 'Animal Data deleted successfully');
    }

    public function approve1(Request $request, $id)
{
    $stolen_missing = Stolen_missing::findOrFail($id);
    $stolen_missing->approval = $request->input('approval');
    $stolen_missing->save();
    return redirect()->back();
}

public function reject1(Request $request, $id)
    {
    $species = Stolen_missing::findOrFail($id);
    $species->approval = $request->input('approval');
    $species->save();
    $species->delete();
    return redirect('admin');
    }
}
