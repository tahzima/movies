<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // if ($request->user()->role == 'admin')
        // {
        // // return redirect('/admin');
        // return view('page.admin');
        // }
        // if ($request->user()->role == 'user')
        // {
        //     // return redirect('/user');
        //     return view('page.user');
        // }
        // if ($request->user()->role == NULL)
        // {
        // dd('role is Null');
        // }
        // else{
        //     dd('hello mother f**ker');
        // }
        
        // return view('home');

        // $movies = post::all();

        // return view('home', ['movies' => $movies]);
    }
}
