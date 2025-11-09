<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course as CourseModel;

class CourseController extends Controller
{
    public function show($id){
        $course = CourseModel::with(['category', 'writer'])->findOrFail($id);

        return view('pages.course', compact('course'));
    }

    public function popular(){
        $courses = CourseModel::with(['category', 'writer'])
            ->orderByDesc('published_at')
            ->paginate(3);

        return view('pages.popular', compact('courses'));
    }
}
