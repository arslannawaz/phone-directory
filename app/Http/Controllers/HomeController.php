<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\intity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $crs=Category::where('name','restaurant')->first();
        $rs=intity::where('categories_id',$crs->id)->
                where(function($result) {
                $result->where("status" ,1);
                })->get();

        $ccl=Category::where('name','college')->first();
        $cl=intity::where('categories_id',$ccl->id)->
        where(function($result) {
            $result->where("status" ,1);
        })->get();

        $cuni=Category::where('name','university')->first();
        $uni=intity::where('categories_id',$cuni->id)->
        where(function($result) {
            $result->where("status" ,1);
        })->get();

        $csch=Category::where('name','school')->first();
        $sch=intity::where('categories_id',$csch->id)->
        where(function($result) {
            $result->where("status" ,1);
        })->get();

        return view('home',compact( 'rs','cl','uni','sch'));
    }
}
