<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
 
use Auth;

class PostController extends Controller
{

    public function index()
    {
        $movies = post::all();
            return view('page.admin', ['movies' => $movies]);
        
    }

    public function user()
    {
        $movies = post::all();
        

        return view('home', ['movies' => $movies]);
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {

        $request->validate([
            'titre' => 'required',
            'dateSort' => 'required',
        ]);

        $request->validate([
            'image' => 'mimes:jpeg,bmp,png'
        ]);

        $movies = new post();

        $movies->titre = $request->input('titre');
        $movies->dateSort = $request->input('dateSort');
        $image = $request->file('image');
        $movies->user_id = Auth::user()->id;

     $Moveimage = rand() . '.' . $image->getClientOriginalExtension();
     $movies->image =$Moveimage;
    $image->move(public_path('image'), $Moveimage);

        $movies->save();

        return redirect('admin');
    }


    public function edit($id)
    {
        $movie = post::find($id);

        // $movie = post::all();

        return view('page.update', ['movie' => $movie ]);
    }


    public function update(Request $request, $id)
    {
        $movie = post::find($id);

        $movie->titre = $request->input('titre');
        $movie->dateSort = $request->input('dateSort');

        $image = $request->file('image');

        $Moveimage = rand() . '.' . $image->getClientOriginalExtension();
        $movie->image =$Moveimage;
        $image->move(public_path('image'), $Moveimage);

        $movie->save();
        return redirect('admin');
    }

    public function destroy($id)
    {
        $movies = post::find($id);

        $movies->delete();
        return redirect('admin');
    }

    public function details($id)
    {
        $movie = post::find($id);
        // $movie = post::all();
        

        return view('page.details', ['movie' => $movie ]);
    }
    
}
