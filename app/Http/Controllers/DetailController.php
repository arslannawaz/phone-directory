<?php

namespace App\Http\Controllers;

use App\intity;
use Illuminate\Http\Request;

class DetailController extends Controller
{


    public function index($id,$name,$phone){

        $in=intity::findOrFAil($id);
        return view('detail',compact('id','name','phone','in'));
    }
}
