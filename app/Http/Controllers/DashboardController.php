<?php

namespace IdeaTrick\Http\Controllers;

use Illuminate\Http\Request;

use IdeaTrick\Http\Requests;
use IdeaTrick\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.admin.index');

    }
}
