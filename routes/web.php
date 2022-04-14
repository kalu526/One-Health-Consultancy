<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Data;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});

Route::get('/',[HomeController::class,'create']);
Route::get('/home',[HomeController::class,'index'])->middleware('auth','verified');
Route::get('/ad',[HomeController::class,'index']);
Route::get('/add_doctor_view',[AdminController::class,'index']);
Route::post('/upload_doctor',[AdminController::class,'store']);
Route::post('/appointement',[HomeController::class,'store']);
Route::get('/myappointement',[HomeController::class,'myappointement']);
Route::get('/cancelappoint/{id}',[HomeController::class,'cancelappoint']);
Route::get('/showappointement',[AdminController::class,'showappointement']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/edit_doctor/{id}',[AdminController::class,'edit_doctor']);
Route::get('/email_view/{id}',[AdminController::class,'email_view']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
Route::post('/upload_about',[Data::class,'uploadabout']);
Route::get('/doctordetail/{id}',[Data::class,'doctordetail']);
Route::get('/postnews',[BlogController::class,'postnews']);
Route::post('/uploadnews',[BlogController::class,'uploadnews']);
Route::get('/singlepage/{id}',[HomeController::class,'singlepage']);
Route::post('/comment',[Data::class,'comment']);

Route::get('/aboutus',[Data::class,'aboutus']);
Route::get('/doctors',[HomeController::class,'doctors']);
Route::get('/news',[HomeController::class,'news']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/aboutcompany',[Data::class,'aboutcompany']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
