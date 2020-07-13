<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class FrontEndController extends Controller
{
    public function index(){
        return view('index',['products'=>Product::paginate(3)]);
    }
    public function singleProduct($id){
        return view('single',['product'=>Product::find($id)]);
    }
}
