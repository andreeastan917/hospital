<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;
class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patients::all();
        //dd($patients);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
          $validareDate = $request
          ->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required',
            'sex' => 'required',
            'dateOfBirth' => 'required'

        ]);
        $show = Patients::create($validareDate);
   
        return redirect('/patients')->with('success', 'Patient is successfully saved');
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
        $patients = Patients::findOrFail($id);

        return view('patients.edit', compact('patients'));
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
            'sex' => 'required',
            'dateOfBirth' => 'required'
        ]);
        Patients::whereId($id)
        ->update($validatedData);
        return redirect('/patients')->with('success', 'Patient Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patients::findOrFail($id);
        $patients->delete();

        return redirect('/patients')->with('success', 'Patient Data is successfully deleted');
    }
}
