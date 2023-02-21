<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Products extends Controller
{
    public function Product(){
        $groupname = Product::all();
        return view('mygroup',['a'=>$groupname]);
    }
}
