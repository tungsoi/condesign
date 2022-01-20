<?php

namespace App\Admin\Controllers\Furn;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('furns.product-list');
    }

    public function show($id)
    {
        return view('furns.product-detail');
    }
}
