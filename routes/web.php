<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ClientsController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\TeamsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceDetailsController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogDetailsController;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('about',[AboutController::class,'about'])->name('about');
Route::get('services',[ServicesController::class,'services'])->name('services');
Route::get('clients',[ClientsController::class,'clients'])->name('clients');
Route::get('portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('teams',[TeamsController::class,'teams'])->name('teams');
Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::get('service-detail',[ServiceDetailsController::class,'serviceDetails'])->name('serviceDetails');
Route::get('blog',[BlogController::class,'blog'])->name('blog');
Route::get('blog-detail',[BlogDetailsController::class,'blogDetails'])->name('blogDetails');
