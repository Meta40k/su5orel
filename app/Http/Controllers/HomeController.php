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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function projects()
    {
        return view('projects');
    }

    public function arenda()
    {
        return view('arenda');
    }

    public function contact()
    {
        return view('contact');
    }

    public function mountgus()
    {
        return view('mountgus');
    }

    public function services()
    {
        return view('services');
    }

    public function vid1()
    {
        return view('vid1');
    }

    public function policy()
    {
        return view('policy');
    }

    public function cards()
    {
        return view('cards');
    }

   
    public function get_message(Request $req) {
        info($req['your-name']);
        return back();
    }
}
