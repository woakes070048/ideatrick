<?php

namespace IdeaTrick\Http\Controllers;

use Illuminate\Http\Request;
use IdeaTrick\Http\Requests;
use IdeaTrick\Http\Controllers\Controller;
use IdeaTrick\Blogpost;

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
