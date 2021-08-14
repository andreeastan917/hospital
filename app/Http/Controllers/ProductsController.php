<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    
    public function index()
    {
         $products = Products::where ('prescription', 'OTC') -> get();
         return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
          $validareDate = $request
          ->validate([
            'name' => 'required|max:255',
            'unitDosage' => 'required',
            'unitType' => 'required',
            'quantity' => 'required',
            'expireDate' => 'required',
            'prescription' => 'required',
            'price' => 'required']);
        $show = Products::create($validareDate);
   
        return redirect('/products')->with('success', 'Product is successfully saved');
}    

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);

        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'unitDosage' => 'required',
            'unitType' => 'required',
            'quantity' => 'required',
            'expireDate' => 'required',
            'prescription' => 'required',
            'price' => 'required']);
        Products::whereId($id)
        ->update($validatedData);
        return redirect('/products')->with('success', 'Product Data is successfully updated');
    }

    
    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();

        return redirect('/products')->with('success', 'Product Data is successfully deleted');
    }
}

