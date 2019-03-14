<?php

namespace App\Http\Controllers;

use App\intity;
use Illuminate\Http\Request;

class IntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'name' => 'required|unique:intities,name',
            'twitter' =>'required|unique:intities,twitter',
            'instagram' =>'required|unique:intities,instagram',
            'facebook' =>'required|unique:intities,facebook',
            'snapchat' =>'required|unique:intities,snapchat',
            'address' =>'required',
            'tollfree' =>'required|unique:intities,tollfree|numeric',
            'landline' =>'required|unique:intities,landline|numeric',
            'website' =>'required|unique:intities,website',
            'categories_id' =>'required',
        ]);

        $input=$request->all();
        $input['status']=1;

        intity::create($input);
        return redirect('panel');

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
        intity::findOrFail($id)->update($request->all());
        return redirect('panel');
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
