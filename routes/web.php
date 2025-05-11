<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ReservationController;



Auth::routes();


Route::prefix('dashboard')->middleware('auth')->group(function()
{
Route::get('/dashboard',[DashboardController::class, 'Index'])->name('dashboard.index');
//المتاحف
Route::get('/museums',[MuseumController::class, 'Index'])->name('dashboard.museums');
Route::get('/reservations',[DashboardController::class, 'ShowReservation'])->name('dashboard.reservations');
Route::post('/createregions', [MuseumController::class,'CreateRegions'])->name('dashboard.createregions');
Route::post('/createmuseums', [MuseumController::class,'MuseumCreate'])->name('dashboard.createmuseums');
Route::get('/editmuseums/{id}', [MuseumController::class,'EditMuseum'])->name('dashboard.editmuseums');
Route::post('/updatemuseums/{id}', [MuseumController::class,'UpdateMuseum'])->name('dashboard.updatemuseums');
Route::get('/deletemuseums/{id}', [MuseumController::class,'DeleteMuseum'])->name('dashboard.deletemuseums');
//اليوزرز
Route::get('/users',[UsersController::class, 'Index'])->name('dashboard.users');
Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('dashboard.users.edit');
Route::post('/users/update/{id}', [UsersController::class, 'update'])->name('dashboard.users.update');
Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('dashboard.users.delete');

});



Route::get('/',[WebsiteController::class, 'Index'])->name('website.homepage');
Route::get('/museumslist',[WebsiteController::class, 'ShowMuseums'])->name('website.museums');
Route::get('/about',[WebsiteController::class, 'About'])->name('website.about');
Route::get('/contact',[WebsiteController::class, 'Contact'])->name('website.contact');
Route::get('/FAQ',[WebsiteController::class, 'FAQ'])->name('website.faq');
Route::get('/details/{id}',[WebsiteController::class, 'ShowDetails'])->name('website.details');


Route::get('/checkout/{id}', [ReservationController::class, 'createReservation'])->name('website.checkout');
Route::post('/reservation', [ReservationController::class, 'storeReservation'])->name('website.Reservation');
Route::get('/confirmation/{id}', [ReservationController::class, 'confirmation'])->name('website.confirmation');
Route::get('/myreservations', [ReservationController::class, 'myReservations'])->name('website.myReservations');


//Route::get('/list',[WebsiteController::class, 'List'])->name('website.list');



