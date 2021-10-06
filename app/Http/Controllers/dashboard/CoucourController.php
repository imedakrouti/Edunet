<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Concour;
use Illuminate\Http\Request;

class CoucourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.concours.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('imed');
        return view('dashboard.concours.create');
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
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function show(Concour $concour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function edit(Concour $concour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concour $concour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concour  $concour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concour $concour)
    {
        //
    }
}
