<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }

  public function dashboard()
  {
    return view('back.content.dashboard');
  }
}
