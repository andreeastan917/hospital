<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Physicians;
class PhysiciansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physicians = Physicians::all();
        return view('physicians.index', compact('physicians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('physicians.create');
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
        $show = Physicians::create($validareDate);
   
        return redirect('/physicians')->with('success', 'Physician is successfully saved');
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
        $physicians = Physicians::findOrFail($id);

        return view('physicians.edit', compact('physicians'));
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
        Physicians::whereId($id)
        ->update($validatedData);
        return redirect('/physicians')->with('success', 'Physician Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $physicians = Physicians::findOrFail($id);
        $physicians->delete();

        return redirect('/physicians')->with('success', 'Physician Data is successfully deleted');
    }
}
