<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\EnrolledSubjectsController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\BalancesController;

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

Route::get('/addstudent', [StudentInfoController::class,'index']);
Route::get('/enrolledsub', [EnrolledSubjectsController::class, 'index']);
Route::get('/addgrades',[GradesController::class,'index']);
Route::get('/balance', [BalancesController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
