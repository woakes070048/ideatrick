<?php

namespace IdeaTrick\Http\Controllers;

use Illuminate\Http\Request;
use IdeaTrick\Http\Requests;
use IdeaTrick\Http\Controllers\Controller;

class SitesController extends Controller
{
    public function index(){
        return view('home.index', ['title' => 'IdeaTrick | The Biggest Event Portal']);

    }

    public function event(){
    	return view('pages.popular',['title' => 'Popular | IdeaTrick']);
    }
}
