<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function master(){
    return view('backend.master');
   }

   public function content(){
    return view('backend.content');
   }
}
