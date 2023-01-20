<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolClassController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\SchoolClass;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $random_students = Student::inRandomOrder()->take(10)->get();
    $random_school = SchoolClass::inRandomOrder()->take(10)->get();


    return view('pages/home', ['students' => $random_students,'schools' => $random_school,]);
});

Route::get('/students', [StudentController::class, 'list']);

Route::get('/students/{id}', [StudentController::class, 'show']);


Route::get('/classes', [SchoolClassController::class, 'list']);

Route::get('/classes/{class_id}', [SchoolClassController::class, 'show']);



