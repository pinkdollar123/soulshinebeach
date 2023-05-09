<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function daytour()
    {
        return view('pages.daytour');
    }
    public function contactus()
    {
        return view('pages.contactus');
    }
    public function accommodations()
    {
        return view('pages.accommodations');
    }
    
}
