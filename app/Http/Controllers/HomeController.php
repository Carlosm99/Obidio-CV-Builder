<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home');
        $user = auth()->user();
        $file = \Storage::disk('s3')->exists('resume/'.auth()->user()->id.'.pdf');
        // $file = \Storage::disk('s3')->exists('resume/'.$user->id.'.pdf');
    }
    
    
}
