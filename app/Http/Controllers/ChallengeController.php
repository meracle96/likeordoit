<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Type;
use Auth;
use Image;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $types = Type::all();
      $challenges = Challenge::latest()->get();
      return view('front.content.challenge-index', compact('types', 'challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types = Type::all();
      return view('front.content.challenge-form', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
          $foto = $request->file('photo');
          $filename = time().'.'.$foto->getClientOriginalExtension();
          Image::make($foto)->resize(1280,876)->save( public_path('/uploads/challenge/'.$filename));
        } else {
          $filename = 'default.jpg';
        }

        Auth::user()->challenges()->create([
          'id_type' => $request->id_type,
          'title' => $request->title,
          'desc' => $request->desc,
          'difficulty' => $request->difficulty,
          'photo' => $filename,
        ]);

        return redirect()->route('challenge.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $challenge = Challenge::where('slug', $slug)
          ->firstOrFail();

        $challenge->views = $challenge->views + 1;
        $challenge->update();

        $popularchallenges = Challenge::all()->sortByDesc('views');

        $types = Type::all();

        return view('front.content.challenge-detail', compact('challenge', 'types', 'popularchallenges'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
