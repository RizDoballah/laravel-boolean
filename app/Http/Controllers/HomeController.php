<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index()
    {
      return view('home.index');
    }
  public function privacy()
    {
      return view('home.privacy');
    }
  public function faq()
    {
      return view('home.faq');
    }

}
