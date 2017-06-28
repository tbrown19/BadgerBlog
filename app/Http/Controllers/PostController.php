<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon;
class PostController extends Controller
{
    //
    function index(){
        $posts = DB::table('posts')->get();

        return view('layouts.home', ['posts' => $posts]);
    }
}
