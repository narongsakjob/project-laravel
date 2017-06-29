<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    function index() {
        $data['first_name'] = 'Narongsak';
        $data['last_name'] = 'Chobsri';
        return view('index', $data);
    }

    function about() {
        
    }
}
