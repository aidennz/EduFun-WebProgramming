<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as CategoryModel;

class CategoryController extends Controller
{
    public function show($id){
        $category = CategoryModel::with(['courses.writer'])->findOrFail($id);

        return view('pages.category', compact('category'));
    }
}
