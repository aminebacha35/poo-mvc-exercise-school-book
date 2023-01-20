<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    public function list(Request $request) {

        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        $query = Student::query();
        if ($order_by != null) {
            $query->orderBy($order_by, $order);
        }
        $student_paginator = $query->paginate(20);
        return view('pages/students', [
            'student_paginator' => $student_paginator,
        ]);
    }


    public function show($id) {
        $student = Student::where('id', $id)->first();
        return view('pages/students_show', ['student' => $student]);
    }
}