<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Models\Student;

Route::get('/', function () {
    return view('mainpage');
});


Route::get('/add-student', function () {
    return view('master.add-student');
});

Route::get('/students',[StudentsController::class,'index']);
Route::resource('addstudent', StudentsController::class);

Route::get('/', function() {
    $students = Student::all();
    return view('mainpage', ['students' => $students]);
});

