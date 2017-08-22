<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    public function index()
    {
        return view('home');
    }

    public function show($username){
        $userprofile = User::where('username',$username)->get();
        return view('profile', compact('userprofile'));
    }
    
    public function getfeed(){
        return view('feed');
    }

    public function postfeed(){

    }
    
    public function sendInvite($email){
        return view('feed');
    }
}
