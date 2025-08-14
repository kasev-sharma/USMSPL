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

     public function minerals()
    {
        $title = 'High-Grade Minerals for Global Industries | Undersky Export';
        return view('pages.minerals', compact('title'));
    }


    public function tea()
    {
        $title = 'Premium Sourced Teas for Global Export | Undersky Export';
        return view('pages.tea', compact('title'));
    }

      public function jewelry()
    {
        $title = 'Exquisite Handcrafted Jewelry for Global Export | Undersky Export';
        return view('pages.jewelry', compact('title'));
    }
}