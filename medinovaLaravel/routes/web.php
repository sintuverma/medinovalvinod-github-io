<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedinovaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', [App\Http\Controllers\MedinovaController:: class, 'index'])->name('medinoval.home');

Route::get('/medinoval/about', [App\Http\Controllers\AboutController:: class, 'index'])->name('medinoval.about');

Route::get('/medinoval/services', [App\Http\Controllers\ServicesController:: class, 'index'])->name('medinoval.services');

Route::get('/medinoval/price', [App\Http\Controllers\ServicesController:: class, 'index'])->name('medinoval.price');

Route::get('/medinoval/pages/Blog', [App\Http\Controllers\PagesController:: class, 'blogGridPage'])->name('medinoval.pagesBlogGrid');

Route::get('/medinoval/pages/Detail', [App\Http\Controllers\PagesController:: class, 'blogDetailPage'])->name('medinoval.pagesBlogDetails');

Route::get('/medinoval/pages/theTeam', [App\Http\Controllers\PagesController:: class, 'teamPage'])->name('medinoval.theTeam');

Route::get('/medinoval/pages/testimonial', [App\Http\Controllers\PagesController:: class, 'testimonialPage'])->name('medinoval.testimonialPage');

Route::get('/medinoval/pages/search', [App\Http\Controllers\PagesController:: class, 'searchPage'])->name('medinoval.searchPage');

Route::get('/medinoval/pages/appointment', [App\Http\Controllers\AppointmentController:: class, 'index'])->name('medinoval.appointment');

Route::get('/medinoval/pages/contactUs', [App\Http\Controllers\ContactUsController:: class, 'index'])->name('medinoval.contactUs');

Route::post('/submitForm',[App\Http\Controllers\ContactUsController:: class, 'store']);

