<?php

namespace App\Http\Controllers;

use App\intity;
use Illuminate\Http\Request;
use App\Category;
use DB;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::pluck('name','id')->all();

        $crs=Category::where('name','restaurant')->first();
        $rs=intity::where('categories_id',$crs->id)->get();

        $ccl=Category::where('name','college')->first();
        $cl=intity::where('categories_id',$ccl->id)->get();

        $cuni=Category::where('name','university')->first();
        $uni=intity::where('categories_id',$cuni->id)->get();

        $csch=Category::where('name','school')->first();
        $sch=intity::where('categories_id',$csch->id)->get();

        return view('panel.index',compact('categories' ,'rs','cl','uni','sch'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
