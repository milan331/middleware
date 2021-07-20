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
    public function index(Request $request)
    {
        //session by put:
        //$request->session()->put(['milan'=>'instructor']);

        //OR
        //global function session:
        //session(['peter'=>'student']);

        //for deleting session:
        //$request->session()->forget(['peter']);
        
        //for deleting everything:
        //$request->session()->flush();

        //for flashing:
        $request->session()->flash('message','session has been created');
        
        return $request->session()->get('message');

        return $request->session()->all();

        return view('home');
    }
}
