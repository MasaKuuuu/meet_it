<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmCotroller extends Controller
{
  public function confirm(Request $request){
    $param=[
      'title' => $request->title,
      'url_key' => str_random(40);
      'item1' => $request->itme1,
      'item2' => $request->itme1,
      'item3' => $request->itme1,
      'item4' => $request->itme1,
    ]
    DB::insert('insert into t_question (title, url_key, itme1, itme2, itme3, itme4) values
    (:title, :url_key, :itme1, :itme2, :itme3, :itme4)', $param);
    return view('home.index');
  }
}
