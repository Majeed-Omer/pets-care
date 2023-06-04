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
        return view('pages.shelter.shelter_page', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'name'         =>  'required',
                'address'        =>  'required',
                'location'       =>   'required',
                'information'      =>  'required',
                'video'         =>  'required|mimes:mp4|max:50000',
                'contact'         =>  'required',
            ]);
    
            $file_name = time() . '.' . request()->video->getClientOriginalExtension();
    
            request()->video->move(public_path('video'), $file_name);
    
            $shelter = new Shelter;
    
            $shelter->name = $request->name;
            $shelter->address = $request->address;
            $shelter->location = $request->location;
            $shelter->information = $request->information;
            $shelter->video = $file_name;
            $shelter->contact = $request->contact;
    
            $shelter->save();
    
            return redirect()->route('index')->with('success', 'Shelter Added successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shelter $shelter)
    {
     
        $video = $request->hidden_video;

        if($request->video != '')
        {
            $video = time() . '.' . request()->video->getClientOriginalExtension();

            request()->video->move(public_path('video'), $video);
        }

        $shelter = Shelter::find($request->hidden_id);
        $shelter->name = $request->name;
        $shelter->address = $request->address;
        $shelter->location = $request->location;
        $shelter->information = $request->information;
        $shelter->video = $video;
        $shelter->contact = $request->contact;
        $shelter->save();

        return redirect()->route('index')->with('success', 'Shelter Data has been updated successfully');
    }

     /**
     * Display the specified resource.
     */
    public function show(Shelter $shelter)
    {
        return view('show', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shelter $shelter)
    {
        $shelter->delete();

        return redirect()->route('index')->with('success', 'Shelter Data deleted successfully');
    }

}
