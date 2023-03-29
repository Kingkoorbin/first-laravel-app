<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\EnrolledSubjectsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//01 route to student info
// Route::get('/students', function () {
//     return view('students/index');
// })->middleware(['auth', 'verified'])->name('students');

//02 route to form add students
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth', 'verified'])->name('add-student');

//03 store student info to create function under student info controller
Route::post('/students/add', [StudentInfoController::class, 'store'])
->middleware(['auth', 'verified'])
->name('student-store');

//04 get all data from studentinfo table
Route::get('/students', [StudentInfoController::class, 'index'])
->middleware(['auth', 'verified'])
->name('students');

//05 view individually student info
Route::get('/students/{stuno}', [StudentInfoController::class, 'show'])
->middleware(['auth', 'verified'])
->name('students-show');

Route::get('/enrolledsubjects', [EnrolledSubjectsController:: class, 'index']);

Route::get('/views/enrolledsubjects', [EnrolledSubjectsController::class, 'index'])
->middleware(['auth', 'verified'])
->name('enrolledsubjects');


Route::get('/enrolledsubjects/add', function () {
    return view('enrolledsubjects.add');
})->middleware(['auth', 'verified'])->name('add-enrolledsubjects');

Route::post('/enrolledsubjects/add',[EnrolledSubjectsController::class, 'store'] )
->middleware(['auth', 'verified'])
->name('enrolledsubjects-store');

Route::get('/enrolledsubjects/{esNo}', [EnrolledSubjectsController::class, 'show'])
->middleware(['auth', 'verified'])
->name('enrolledsubjects-show');

Route::delete('/enrolledsubjects/delete/{esNo}', [EnrolledSubjectsController::class, 'destroy'])
->middleware(['auth', 'verified'])
->name('enrolledsubjects-delete');

Route::get('/enrolledsubjects/edit/{esNo}', [EnrolledSubjectsController::class, 'edit'])
->middleware(['auth', 'verified'])
->name('enrolledsubjects-edit');

Route::patch('/enrolledsubjects/update/{esNo}', [EnrolledSubjectsController::class, 'update'])
->middleware(['auth', 'verified'])
->name('enrolledsubjects-update');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
