<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    public function list() {
        $query = Student::query();
        $student_paginator = $query->paginate(20);
        return view('students', [
            'student_paginator' => $student_paginator,
        ]);
    }
}