<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Physician;
class PhysicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physician = Physician::all();
        return view('physician.index', compact('physician'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('physician.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validareDate = $request
          ->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required',
            'speciality' => 'required'
        ]);
        $show = Physician::create($validareDate);
   
        return redirect('/physician')->with('success', 'Physician is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $physician = Physician::findOrFail($id);

        return view('physician.edit', compact('physician'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'lastName' => 'required|max:255',
            'firstName' => 'required',
            'speciality' => 'required'
        ]);
        Physician::whereId($id)
        ->update($validatedData);
        return redirect('/physician')->with('success', 'Physician Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $physician = Physician::findOrFail($id);
        $physician->delete();

        return redirect('/physician')->with('success', 'Physician Data is successfully deleted');
    }
}
