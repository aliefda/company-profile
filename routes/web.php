<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

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

//Menu
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/trainers', [HomeController::class, 'trainers'])->name('trainers');
Route::get('/vehicles', [HomeController::class, 'vehicles'])->name('vehicles');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::prefix('/admin')->middleware('auth')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Slider
    Route::resource('sliders', SliderController::class);
    
    //Service
    Route::resource('services', ServiceController::class);
    
    //Testimonial
    Route::resource('testimonials', TestimonialController::class);
    
    //Vehicle
    Route::resource('vehicles', VehicleController::class);
    
    //Trainers
    Route::resource('trainers', TrainerController::class);
    
    //Contact
    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);
    
    //About
    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);
});

