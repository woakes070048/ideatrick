<?php

namespace IdeaTrick\Http\Controllers;

use Illuminate\Http\Request;
use IdeaTrick\Http\Requests;
use IdeaTrick\Http\Controllers\Controller;

class SitesController extends Controller
{
    public function index(){
        return view('home.index', ['title' => 'IdeaTricks | The Biggest Event Portal']);

    }
}
