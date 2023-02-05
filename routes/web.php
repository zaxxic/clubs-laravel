<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PemainCntroller;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StadionController;
use App\Http\Controllers\TicketController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\register;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('clubs',[ClubController::class,'tes'])->name('club')->middleware('auth');
Route::post('save',[ClubController::class,'save'])->name('save');

Route::get('isi/{id}',[ClubController::class,'isii'])->name('isi');    

Route::get('create',[ClubController::class,'create'])->name('create');

Route::get('delc/{id}',[ClubController::class,'deletec'])->name('deletec');

Route::put('update',[ClubController::class,'update'])->name('update'); 
Route::get('edit/{id}',[ClubController::class,'edit'])->name('edit');
//club

Route::get('stadions',[StadionController::class,'tes'])->name('stadion')->middleware('auth');

Route::get('creates',[StadionController::class,'creates'])->name('creates');
Route::post('saves',[StadionController::class,'saves'])->name('saves');

Route::get('edits/{id}',[StadionController::class,'edits'])->name('edits');
Route::put('updates',[StadionController::class,'updates'])->name('updates');

Route::get('del/{id}',[StadionController::class,'delete'])->name('delete');
//stadion

Route::get('players/{id}',[PlayerController::class,'players'])->name('players');
Route::get('tambahplayer',[PlayerController::class,'tambahplayer'])->name('tambahplayer');
Route::post('savep',[PlayerController::class,'savep'])->name('savep');
//not done

Route::get('tiket',[TicketController::class,'tampil'])->name('tiket')->middleware('auth');

Route::get('tambahtiket',[TicketController::class,'tambahtiket'])->name('tambahtiket');
Route::post('savetiket',[TicketController::class,'savetiket'])->name('savetiket');


Route::get('perbaruii/{id}',[TicketController::class,'editt'])->name('perbaruii');
Route::put('updatet',[TicketController::class,'updates'])->name('updatet');

Route::get('delet/{id}',[TicketController::class,'deletet'])->name('delet');

Route::get('cari',[TicketController::class,'carii'])->name('cari');


Route::get('/tickets/{jenist}',[TicketController::class,'filter'])->name('filter');
//tiket

Route::get('pemain',[PemainCntroller::class,'tampil'])->name('pemain')->middleware('auth');

Route::get('tambahpemain',[PemainCntroller::class,'tambahpemain'])->name('tambahpemain');
Route::post('savepemain',[PemainCntroller::class,'savepemain'])->name('savepemain');

Route::get('perbaruip/{id}',[PemainCntroller::class,'perbaruip'])->name('perbaruip');
Route::put('updatep',[PemainCntroller::class,'updatep'])->name('updatep');

Route::get('hapuss/{id}',[PemainCntroller::class,'hapusp'])->name('hapuss');

//pemain

Route::get('jadwalt',[JadwalController::class,'tampil'])->name('jadwalt')->middleware('auth');

Route::get('tambahJadwal',[JadwalController::class,'tambah'])->name('tambahJadwal');
Route::post('savejadwal',[JadwalController::class,'savejadwal'])->name('savejadwal');

Route::put('updatej',[JadwalController::class,'updatej'])->name('updatej');
Route::get('perbaruij/{id}',[JadwalController::class,'perbarui'])->name('perbaruij');


Route::get('hapusj/{id}',[JadwalController::class,'hapusj'])->name('hapusj');

//ads

Route::get('adst',[AdsController::class,'tampil'])->name('adst')->middleware('auth');


Route::get('tambahads',[AdsController::class,'tambahh'])->name('tambahads');
Route::post('saveads',[AdsController::class,'saveads'])->name('saveads');

Route::put('updateads',[AdsController::class,'updateads'])->name('updateads'); 
Route::get('editads/{id}',[AdsController::class,'editads'])->name('editads');

Route::get('deleteads/{id}',[AdsController::class,'deleteads'])->name('deleteads');

//member

Route::get('membert',[MemberController::class,'tampil'])->name('membert')->middleware('auth');

Route::get('tambahmember',[MemberController::class,'tambahh'])->name('tambahmember');
Route::post('savemember',[MemberController::class,'savemember'])->name('savemember');

Route::put('updatemember',[MemberController::class,'updatemember'])->name('updatemember'); 
Route::get('editmember/{id}',[MemberController::class,'editmember'])->name('editmember');

Route::get('deletemember/{id}',[MemberController::class,'delete'])->name('deletemember');








Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'kelogin'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register');



Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');