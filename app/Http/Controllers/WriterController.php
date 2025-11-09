<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer as WriterModel;

class WriterController extends Controller
{
    public function index(){
        $writers = WriterModel::all();

        return view('pages.writers', compact('writers'));
    }

    public function show($id){
        $writer = WriterModel::with(['courses.category'])->findOrFail($id);

        return view('pages.writer-detail', compact('writer'));
    }
}
