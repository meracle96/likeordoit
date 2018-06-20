<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challenge;
use App\Like;
use Auth;

class LikeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function like($slug)
  {
    $challenge = Challenge::where('slug', $slug)
      ->firstOrFail();

    Auth::user()->likes()->create([
      'challenge_id' => $challenge->id
    ]);

    return back();
  }
}
