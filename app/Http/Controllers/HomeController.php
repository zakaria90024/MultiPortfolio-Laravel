<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
    }

    public function data(){
      //$users = DB::table('users')->where('name', 'zakaria112203')->first();
      //$users = DB::table('users')->get();
      //$users = DB::table('users')->find(2); //full column 2 no id er
      //$users = DB::table('users')->where('name', 'zakaria112203')->value('email');//ekta email output - zakaria112203@gmail.com
      //echo $users;

      $users = DB::table('users')->pluck("name");//array akare ana jay 
      //$users = DB::table('users')->pluck("name", "email");


      //print_r($users);
      return response()->json($users);

      // foreach ($users as $user) {
      //   echo $user->name;
      // }

      //return response()->json();
    }
}
