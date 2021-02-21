<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
    public function index(){
        $cars = Cars::latest()->get();
        return view('cars.index',compact('cars'));
    }

    public function create(){
        return view('cars.create');
    }

    public function store(Request $request){
        //dd($request->all());
        Cars::create($request->all());
        return redirect()->route('cars.index');
    }

    public function edit(Cars $cars){
        return view('cars.edit',compact('cars'));
    }

    public function update(Request $request, Cars $cars){
        $cars->update($request->all());
        return redirect()->route('cars.index');        
    }

    public function delete(Cars $cars)
    {
        $cars->delete();
        return redirect()->back();  
    }
}
