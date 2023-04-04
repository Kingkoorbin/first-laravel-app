<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\EnrolledSubjectsController;
use App\Http\Controllers\BalancesController;
use App\Http\Controllers\GradesController;
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

Route::delete('/students/delete/{stuno}', [StudentInfoController::class, 'destroy'])
   ->middleware(['auth', 'verified'])
   ->name('students-delete');

   Route::get('/students/edit/{stuno}', [StudentInfoController::class, 'edit'])
   ->middleware(['auth', 'verified'])
   ->name('students-edit');

   Route::patch('/students/update/{stuno}', [StudentInfoController::class, 'update'])
   ->middleware(['auth', 'verified'])
   ->name('students-update');

Route::get('/enrolledsubjects', [EnrolledSubjectsController:: class, 'index']);


//For Enrolled Subjects

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

//for balances

Route::get('/balances', [BalancesController::class, 'index'])
->middleware(['auth', 'verified'])
->name('balances');

Route::get('/balances/add', [BalancesController::class, 'getStudentInfo'])
->middleware(['auth', 'verified'])
->name('balances-add');

Route::post('/balances/store', [BalancesController::class, 'store'])
->middleware(['auth', 'verified'])
->name('balances-store');

Route::get('/balances/{bNo}', [BalancesController::class, 'show'])
->middleware(['auth', 'verified'])
->name('balances-show');

Route::delete('/balances/delete/{bNo}', [BalancesController::class, 'destroy'])
->middleware(['auth', 'verified'])
->name('balances-delete');

Route::get('/balances/edit/{bNo}', [BalancesController::class, 'edit'])
->middleware(['auth', 'verified'])
->name('balances-edit');

Route::patch('/balances/update/{bNo}', [BalancesController::class, 'update'])
->middleware(['auth', 'verified'])
->name('balances-update');


//for Grades

Route::get('/grades', [GradesController::class, 'index'])
->middleware(['auth', 'verified'])
->name('grades');

Route::get('/grades/add', [GradesController::class, 'getStudentInfo'])
->middleware(['auth', 'verified'])
->name('grades-add');

Route::get('/grades/add', [GradesController::class, 'getSubjectInfo'])
->middleware(['auth', 'verified'])
->name('grades-add');

Route::post('/grades/add', [GradesController::class, 'store'])
->middleware(['auth', 'verified'])
->name('grades-store');

Route::get('/grades/{gNo}', [GradesController::class, 'show'])
->middleware(['auth', 'verified'])
->name('grades-show');

Route::get('/grades/edit/{gNo}', [GradesController::class, 'edit'])
->middleware(['auth', 'verified'])
->name('grades-edit');

Route::patch('/grades/update/{gNo}', [GradesController::class, 'update'])
->middleware(['auth', 'verified'])
->name('grades-update');

Route::delete('/grades/delete/{gNo}', [GradesController::class, 'destroy'])
->middleware(['auth', 'verified'])
->name('grades-delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
