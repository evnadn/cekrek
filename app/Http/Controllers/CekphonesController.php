<?php

namespace App\Http\Controllers;

use App\Cekphone;
use Illuminate\Http\Request;

class CekphonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cekphone');
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
     * @param  \App\Cekphone  $cekphone
     * @return \Illuminate\Http\Response
     */
    public function show(Cekphone $cekphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cekphone  $cekphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Cekphone $cekphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cekphone  $cekphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cekphone $cekphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cekphone  $cekphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cekphone $cekphone)
    {
        //
    }
}
