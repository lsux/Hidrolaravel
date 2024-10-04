<?php

namespace App\Http\Controllers;

use App\Models\Acueductos;
use Illuminate\Http\Request;

class AcueductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acueductos = Acueductos::all();
        dd($acueductos);
        // return view('acueductos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Acueductos $acueductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acueductos $acueductos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acueductos $acueductos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acueductos $acueductos)
    {
        //
    }
}
