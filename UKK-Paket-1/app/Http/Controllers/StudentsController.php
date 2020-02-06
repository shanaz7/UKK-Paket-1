<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    public function index() {
        $products = Students::all();
 
        return view('students.index', compact('students'));
    }

    public function upload(Request $request) {
        $item = new Students();
    }
}
