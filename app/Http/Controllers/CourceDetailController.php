<?php

namespace App\Http\Controllers;

use App\CourceDetail;
use App\CourceModule;
use Illuminate\Http\Request;

class CourceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $size=count(request('name'));  
    $course=new CourceDetail();
    $course->course_name=request('course');
    $course->save();
      for($i=0; $i<$size; $i++)
      {
        $module=new CourceModule();

         $module->Module_Name=request('name')[$i];
         $module->Level=request('level')[$i];
         $module->course_id=$course->id;
         $module->save();
      }
      return "Good";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourceDetail  $courceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CourceDetail $courceDetail)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourceDetail  $courceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CourceDetail $courceDetail)
    {
        
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
