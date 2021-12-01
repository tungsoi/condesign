<?php

namespace App\Admin\Controllers\Furn;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductProperty;
use Illuminate\Http\Request;

class ProductController extends Controller
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
