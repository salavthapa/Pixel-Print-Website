<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicedetailsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailsController;
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('about',[AboutController::class,'about'])->name('about');
Route::get('services',[ServicesController::class,'services'])->name('services');
Route::get('clients',[ClientsController::class,'clients'])->name('clients');
Route::get('portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('teams',[TeamsController::class,'teams'])->name('teams');
Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::get('servicedetails',[ServicedetailsController::class,'servicedetails'])->name('servicedetails');
Route::get('blog',[BlogController::class,'blog'])->name('blog');
Route::get('blogdetails',[BlogdetailsController::class,'blogdetails'])->name('blogdetails');