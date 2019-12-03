<?php

namespace App\Http\Controllers;

use App\CourceDetail;
use Illuminate\Http\Request;

class CourceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.Course.create');
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
     * @param  \App\CourceDetail  $courceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CourceDetail $courceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourceDetail  $courceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CourceDetail $courceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourceDetail  $courceDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourceDetail $courceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourceDetail  $courceDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourceDetail $courceDetail)
    {
        //
    }
}
