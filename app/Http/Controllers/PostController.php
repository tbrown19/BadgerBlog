<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Post;
class PostController extends Controller
{
    //
    function index(){
        $posts = Post::all();
        return view('layouts.home', ['posts' => $posts]);
    }
}
