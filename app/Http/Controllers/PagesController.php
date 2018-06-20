<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Challenge;

class PagesController extends Controller
{
  public function dashboard()
  {
    $types = Type::all();
    $challenges = Challenge::latest()->paginate(6);
    return view('front.content.dashboard', compact('types', 'challenges'));
  }
}
