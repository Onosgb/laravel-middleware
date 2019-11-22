<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // how to set session and get session dynamically 
        $user = Auth::user();

        // first method 
        // $request->session()->put([$user->name=>'Web Developer']);
        // echo $request->session()->get($user->name);

        // second method
        // session([$user->name=>'Web Developer']);

        echo session()->get($user->name);

        // to delete session
        // $request->session()->forget($user->name);
        // session()->forget($user->name);
        /// delete all session
        // session()->flush();

        // flahing message session
        // $request->session()->flash('message', 'Post has been successfully created');
        // echo $request->session()->get('message');
        return view('home');
    }
}
