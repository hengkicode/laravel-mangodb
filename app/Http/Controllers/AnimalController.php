<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
{
    public function create()
    {
        return view('animalcreate');
    }
    public function store(Request $request)
    {
        $animal=new Animal();
        $animal->species = $request->get('species');
        $animal->color = $request->get('color');
        $animal->leg = $request->get('leg');        
        $animal->save();
        return redirect('animal')->with('success', 'Animal has been successfully added');
    }
    public function index()
    {
        $animals=Animal::all();
        return view('animalindex',compact('animals'));
    }
    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('animaledit',compact('animal','id'));
    }
    public function update(Request $request, $id)
    {
        $animal= ANimal::find($id);
        $animal->species = $request->get('species');
        $animal->color = $request->get('color');
        $animal->leg = $request->get('leg');        
        $animal->save();
        return redirect('animal')->with('success', 'Animal has been successfully update');
    }
    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete($animal);
        return redirect('animal')->with('success','Animal has been  deleted');
    }
}