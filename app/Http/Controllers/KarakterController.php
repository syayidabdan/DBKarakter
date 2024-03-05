<?php

namespace App\Http\Controllers;

use App\Models\Karakter;
use Illuminate\Http\Request;

class KarakterController extends Controller
{
    public function index(){
        $karakter = Karakter::all();
        return view('home',compact(['karakter']));
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request){
        $karakter = Karakter::create($request->all());
        return redirect('home');
    }

    public function edit($id){
        $karakter = Karakter::find($id);
        return view('update.edit',compact(['karakter']));
    }

    public function update($id, Request $request){
        $karakter = Karakter::find($id);
        $karakter->update($request->all());
        return redirect('home');
    }

    public function destroy($id){
        $karakter = Karakter::find($id);
        $karakter->delete();
        return redirect('home');
    }
}
