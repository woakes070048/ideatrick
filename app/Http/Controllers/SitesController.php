<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    public function index(){
        return view('main', ['title' => 'Market Indie  | Marketplace Produk Lokal Indonesia Berkualitas Dunia']);

    }
}
