<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // カテゴリページ表示
    public function index()
    {
        $categories = Category::all();

        return view('category', compact('categories'));
    }

    // カテゴリ作成＆データ保存
    public function store(Request $request)
    {
        $category = $request->only(['name']);
        Category::create($category);

        return redirect('/categories');
    }
}