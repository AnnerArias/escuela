<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('alumnos', AlumnoController::class);
    Route::resource('students', StudentController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('sections', SectionController::class);
    Route::resource('enrollments', EnrollmentController::class);
    Route::get('/enrollments/search-by-cedula', [EnrollmentController::class, 'searchByCedula']);
    Route::get('/enrollments/get-sections-by-grade', [EnrollmentController::class, 'getSectionsByGrade']);
    
    
});

require __DIR__.'/auth.php';
