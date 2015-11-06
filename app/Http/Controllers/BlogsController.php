<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blogpost;

class BlogsController extends Controller
{
    public function index(){

        $title = ('Blog | Market Indie');
        $blogposts = Blogpost::All();

        return view('blogs.index', compact('blogposts', 'title'));

    }

    public function details($id){

        $blogpost = Blogpost::findOrFail($id);

        return view('blogs.detail', compact('blogpost'));

    }
}
