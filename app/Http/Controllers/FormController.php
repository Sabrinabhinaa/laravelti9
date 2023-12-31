<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index ()
    {
    //arahkan ke file form.blade.php
    return view ('form');
    }
    
    /**
     * Show the for creating a new resource. 
     */
    public function store(Request $request )
    {
        //
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
    ]);
    return view('hasil', ['data' => $request]);
            
}
}
