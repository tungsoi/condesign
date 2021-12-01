<?php

namespace App\Admin\Controllers\Furn;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('furns.index');
    }

    public function aboutus()
    {
        return view('furns.about');
    }

    public function service()
    {
        return view('furns.service');
    }


    public function contact()
    {
        return view('furns.contact');
    }

    public function blog()
    {
        return view('furns.blog');
    }
}
