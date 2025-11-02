<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Project::orderBy('order', 'asc')->orderBy('created_at', 'desc')->paginate(12);

        return view('products.index', compact('products'));
    }

    public function show(Project $product)
    {
        return view('products.show', compact('product'));
    }
}

