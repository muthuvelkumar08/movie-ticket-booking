<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[MovieController::class,'showMovie'])->name('showMovie');
Route::get('/ticketbooking',[MovieController::class,'ticketBooking'])->name('ticketBooking');
Route::post('/saveticket',[MovieController::class,'saveTicket'])->name('saveTicket');
Route::get('/viewtiming',[MovieController::class,'viewTiming'])->name('viewTiming');
Route::get('viewticket/{timing}',[MovieController::class,'viewTicket'])->name('viewTicket');
Route::get('editTicket/{id}',[MovieController::class,'editTicket'])->name('editTicket');
Route::put('updateTicket/{id}',[MovieController::class,'updateTicket'])->name('updateTicket');
Route::get('deleteTicket/{id}',[MovieController::class,'deleteTicket'])->name('deleteTicket');

