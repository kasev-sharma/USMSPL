<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the main home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // We will pass a title variable to our view. This is good practice.
        $title = 'Under Sky Imports & Exports - Global Sourcing Solutions';
        
        return view('pages.index', compact('title'));
    }
}