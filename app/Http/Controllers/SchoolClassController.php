<?php
namespace App\Http\Controllers;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;



class SchoolClassController extends Controller
{
    public function list() {
        $nStudent = SchoolClass::all();
        $query = SchoolClass::query();
        $schoolclass_paginator = $query->paginate(20);
        return view('school_class', [
            'nStudent' => $nStudent,
            'schoolclass_paginator' => $schoolclass_paginator,
            
        ]);
    }
}

