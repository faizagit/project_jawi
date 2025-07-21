<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuriController;
use App\Http\Controllers\DewanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PenilaianController;
use PHPUnit\Framework\Constraint\Operator;

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

Route::get('/', function(){
    return view('welcome');
});


Route::get('/juri', [JuriController::class, 'index']);

Route::get('/dewan', [DewanController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/timer', [TimerController::class, 'index']);

Route::get('/operator', [OperatorController::class, 'index']);

Route::get('/penilaian', [PenilaianController::class, 'index']);






