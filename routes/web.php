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

Route::get('/dewanoperator', function(){
    return view('dewanOperator');
});



// seni
Route::get('/seni/prestasi/tunggal/biru/juri', function(){
    return view('seni.prestasi.tunggal.biru.juri');
});
Route::get('/seni/prestasi/tunggal/biru/dewan', function(){
    return view('seni.prestasi.tunggal.biru.dewan');
});
Route::get('/seni/prestasi/tunggal/biru/dewanOperator', function(){
    return view('seni.prestasi.tunggal.biru.dewanOperator');
});
Route::get('/seni/prestasi/tunggal/biru/penonton', function(){
    return view('seni.prestasi.tunggal.biru.penonton');
});
Route::get('/seni/prestasi/tunggal/biru/penontonfinal', function(){
    return view('seni.prestasi.tunggal.biru.penontonFinal');
});
Route::get('/seni/prestasi/tunggal/merah/juri', function(){
    return view('seni.prestasi.tunggal.merah.juri');
});
Route::get('/seni/prestasi/tunggal/merah/dewan', function(){
    return view('seni.prestasi.tunggal.merah.dewan');
});
Route::get('/seni/prestasi/tunggal/merah/dewanOperator', function(){
    return view('seni.prestasi.tunggal.merah.dewanOperator');
});
Route::get('/seni/prestasi/tunggal/merah/penonton', function(){
    return view('seni.prestasi.tunggal.merah.penonton');
});
Route::get('/seni/prestasi/tunggal/penontonfinal', function(){
    return view('seni.prestasi.tunggal.penontonFinal');
});
Route::get('/seni/prestasi/ganda/penontonfinal', function(){
    return view('seni.prestasi.ganda.penontonFinal');
});
Route::get('/seni/prestasi/regu/penontonfinal', function(){
    return view('seni.prestasi.regu.penontonFinal');
});

Route::get('/seni/prestasi/ganda/biru/juri', function(){
    return view('seni.prestasi.ganda.biru.juri');
});
Route::get('/seni/prestasi/ganda/biru/dewan', function(){
    return view('seni.prestasi.ganda.biru.dewan');
});
Route::get('/seni/prestasi/ganda/biru/dewan2', function(){
    return view('seni.prestasi.ganda.biru.dewan2');
});
Route::get('/seni/prestasi/ganda/biru/penonton', function(){
    return view('seni.prestasi.ganda.biru.penonton');
});
Route::get('/seni/prestasi/ganda/merah/dewanOperator', function(){
    return view('seni.prestasi.ganda.merah.dewanOperator');
});
Route::get('/seni/prestasi/ganda/merah/juri', function(){
    return view('seni.prestasi.ganda.merah.juri');
});
Route::get('/seni/prestasi/ganda/merah/dewan', function(){
    return view('seni.prestasi.ganda.merah.dewan');
});
Route::get('/seni/prestasi/ganda/merah/dewan2', function(){
    return view('seni.prestasi.ganda.merah.dewan2');
});
Route::get('/seni/prestasi/ganda/merah/penonton', function(){
    return view('seni.prestasi.ganda.merah.penonton');
});
Route::get('/seni/prestasi/ganda/merah/dewanOperator', function(){
    return view('seni.prestasi.ganda.merah.dewanOperator');
});
Route::get('/seni/prestasi/regu/biru/juri', function(){
    return view('seni.prestasi.regu.biru.juri');
});
Route::get('/seni/prestasi/regu/biru/dewan', function(){
    return view('seni.prestasi.regu.biru.dewan');
});
Route::get('/seni/prestasi/regu/biru/penonton', function(){
    return view('seni.prestasi.regu.biru.penonton');
});
Route::get('/seni/prestasi/regu/merah/juri', function(){
    return view('seni.prestasi.regu.merah.juri');
});
Route::get('/seni/prestasi/regu/merah/dewan', function(){
    return view('seni.prestasi.regu.merah.dewan');
});
Route::get('/seni/prestasi/regu/merah/penonton', function(){
    return view('seni.prestasi.regu.merah.penonton');
});
Route::get('/seni/pemasalan/tunggal/juri', function(){
    return view('seni.pemasalan.tunggal.juri');
});
Route::get('/seni/pemasalan/tunggal/dewan', function(){
    return view('seni.pemasalan.tunggal.dewan');
});
Route::get('/seni/pemasalan/tunggal/dewanOperator', function(){
    return view('seni.pemasalan.tunggal.dewanOperator');
});
Route::get('/seni/pemasalan/tunggal/penonton', function(){
    return view('seni.pemasalan.tunggal.penonton');
});
Route::get('/seni/pemasalan/ganda/juri', function(){
    return view('seni.pemasalan.ganda.juri');
});
Route::get('/seni/pemasalan/ganda/dewan', function(){
    return view('seni.pemasalan.ganda.dewan');
});
Route::get('/seni/pemasalan/ganda/dewanOperator', function(){
    return view('seni.pemasalan.ganda.dewanOperator');
});
Route::get('/seni/pemasalan/ganda/penonton', function(){
    return view('seni.pemasalan.ganda.penonton');
});
Route::get('/seni/pemasalan/regu/juri', function(){
    return view('seni.pemasalan.regu.juri');
});
Route::get('/seni/pemasalan/regu/dewan', function(){
    return view('seni.pemasalan.regu.dewan');
});
Route::get('/seni/pemasalan/regu/penonton', function(){
    return view('seni.pemasalan.regu.penonton');
});
Route::get('/seni/pemasalan/solokreatif/juri', function(){
    return view('seni.pemasalan.soloKreatif.juri');
});
Route::get('/seni/pemasalan/solokreatif/dewan', function(){
    return view('seni.pemasalan.soloKreatif.dewan');
});
Route::get('/seni/pemasalan/solokreatif/dewanOperator', function(){
    return view('seni.pemasalan.soloKreatif.dewanOperator');
});
Route::get('/seni/pemasalan/solokreatif/penonton', function(){
    return view('seni.pemasalan.soloKreatif.penonton');
});
Route::get('/seni/prestasi/solokreatif/juri', function(){
    return view('seni.prestasi.soloKreatif.juri');
});
Route::get('/seni/prestasi/solokreatif/dewan', function(){
    return view('seni.prestasi.soloKreatif.dewan');
});
Route::get('/seni/prestasi/solokreatif/dewanOperator', function(){
    return view('seni.prestasi.soloKreatif.dewanOperator');
});
Route::get('/seni/prestasi/solokreatif/penonton', function(){
    return view('seni.prestasi.soloKreatif.penonton');
});
Route::get('/seni/timer', function(){
    return view('seni.timer.timer');
});
Route::get('/seni/juri/tangankosong', function(){
    return view('seni.tangankosong.juri');
});
Route::get('/seni/juri/bersenjata', function(){
    return view('seni.bersenjata.juri');
});
Route::get('/superadmin', function(){
    return view('superadmin.superadmin');
});
Route::get('/jurusbaku/perseorangan/juri', function(){
    return view('jurusbaku.perseorangan.juri');
});
Route::get('/jurusbaku/berpasangan/juri', function(){
    return view('jurusbaku.berpasangan.juri');
});
Route::get('/jurusbaku/berkelompok/juri', function(){
    return view('jurusbaku.berkelompok.juri');
});



// bersenjata
Route::get('/seni/ganda/bersenjata/juri', function(){
    return view('seni.pemasalan.ganda.bersenjata.juri');
});
Route::get('/seni/ganda/tangankosong/juri', function(){
    return view('seni.pemasalan.ganda.tangankosong.juri');
});
Route::get('/seni/tunggal/bersenjata/juri', function(){
    return view('seni.pemasalan.tunggal.bersenjata.juri');
});
Route::get('/seni/tunggal/tangankosong/juri', function(){
    return view('seni.pemasalan.tunggal.tangankosong.juri');
});




// id card
Route::get('/idcard', function(){
    return view('idcard.idcard');
});
Route::get('/idcard2', function(){
    return view('idcard.idcard2');
});








