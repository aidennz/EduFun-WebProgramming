<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as CourseModel;

class HomeController extends Controller
{
    public function index(){
        $courses = CourseModel::with(['category', 'writer'])
            ->latest()
            ->take(6)
            ->get();

        return view('pages.home', compact('courses'));
    }
}
