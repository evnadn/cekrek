<?php

namespace App\Http\Controllers;

use App\Cekrek;
use Illuminate\Http\Request;

class CekreksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cekrek');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cekrek  $cekrek
     * @return \Illuminate\Http\Response
     */
    public function show(Cekrek $cekrek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cekrek  $cekrek
     * @return \Illuminate\Http\Response
     */
    public function edit(Cekrek $cekrek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cekrek  $cekrek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cekrek $cekrek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cekrek  $cekrek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cekrek $cekrek)
    {
        //
    }
}
