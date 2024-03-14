<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required',
            'bannerAddress' => 'required',
        ]);
    }

    public function index(Request $request) {
        $allCourses = Course::all();
        return response()->json($allCourses);
    }
}
