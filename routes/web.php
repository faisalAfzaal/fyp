<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Doctor;
use App\Http\Controllers\labs;
use App\Http\Controllers\patients;
use App\Http\Controllers\Doctor_Controller;
use App\Http\Controllers\HomeController;
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

Route::get('/Doctors', function () {
    return view('front.doctors');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/blog-detail', function () {
    return view('front.blog-details');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/blog', function () {
    return view('front.blog');
});


// Route::get('/', function () {
//     return view('front.index');

// });
//  Route::get('/doctorsform',[Doctor_Controller::class,'index'])->name('index');
//  Route::post('/doctorsform',[Doctor_Controller::class,'create'])->name('create');
//  Route::get('/edit/{id}',[Doctor_Controller::class,'edit'])->name('edit');
//  Route::put('/edit/{id}',[Doctor_Controller::class,'update'])->name('update');
//  Route::get('/delete/{id}',[Doctor_Controller::class,'destroy'])->name('destroy');
//  Route::view('upload','front.uploadfile');
//  Route::post('upload',[labs::class,'file'])->name('file');
//  Route::get('/test', function () {
//     return view('welcome');

//  });
Route::get('/',[HomeController::class,'redirect'])->name('redirect');
//Route::get('/Home',[HomeController::class,'index'])->name('Home');
//Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/dashboard',[HomeController::class,'index2'])->name('dashboard');
Route::get('/add-doctors',[AdminController::class,'addDoctor'])->name('addDoctor');
Route::post('/upload-doctor',[AdminController::class,'uploadDoctor'])->name('uploadDoctor');
Route::get('all-doctors',[HomeController::class,'allDoctors'])->name('allDoctors');
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/my-appointment',[HomeController::class,'myAppointment']);
Route::get('/cancel-appointment/{id}',[HomeController::class,'cancelAppointment']);
Route::get('/show-appointment',[AdminController::class,'showAppointment']);
Route::get('/approve{id}',[AdminController::class,'approve']);
Route::get('/cancel{id}',[AdminController::class,'cancel']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
