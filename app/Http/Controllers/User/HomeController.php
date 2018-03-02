<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = post::where('status',1)->paginate(5);
    	return view('user.blog',compact('posts'));
    }
}
