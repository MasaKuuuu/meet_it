<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmCotroller extends Controller
{
  public function index(){
    $data = ['msg'=>'これはBladeを利用したサンプルです。',];
    return view('home.index',$data);
  }
}
