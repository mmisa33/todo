<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // カテゴリページ表示
        $categories = Category::all();

        return view('category', compact('categories'));
    }
}