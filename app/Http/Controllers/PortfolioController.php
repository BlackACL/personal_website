<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\About;
use App\Models\Project;
use App\Models\Social;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $header=Header::first();
        $about=About::first();
        $social=Social::get();

        return view('index', compact('header', 'about', 'social'));


    }





}


