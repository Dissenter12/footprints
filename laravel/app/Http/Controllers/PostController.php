<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class PostController extends Controller
{
    function showPosts(){
    	$posts = Post::all();
    	return view('pages/footprint', compact('posts'));
    }

    function showProfile($id){

		return view('pages/userprofile');
	}
}
