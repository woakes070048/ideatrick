<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    public function index(){
        return view('home.index', ['title' => 'IdeaTricks | The Biggest Event Portal']);

    }
}
