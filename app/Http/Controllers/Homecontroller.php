<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{
    public function index(){

       $datalist=DB::select('select * from doktors');
       return view('home.index',['datalist'=>$datalist]);
    }
}
