<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function home(){
        $data = Post::all();
        return view('home',compact('data'));
    }
    public function user(){
        $data = User::all();
        return view('user',compact('data'));
    }
}