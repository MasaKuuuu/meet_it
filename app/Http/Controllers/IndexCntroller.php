<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCntroller extends Controller
{
  public function home(){
    return view('home.index',$data);
  }
}
