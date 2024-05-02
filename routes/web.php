<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoteController;
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

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/inscription',[PageController::class,'inscription'])->name('inscription');
Route::get('test',function(){
    return view('test');
});



Route::get('/list/candidates',[PageController::class,'candidates'])->name('candidate.list');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('jeVotePour/{slug}',[PageController::class,'vote'])->name('candidate.vote');
Route::get('access',[VoteController::class,'payment']);
Route::get('validation/{token}/{payToken}/{number}/{amount}',[VoteController::class,'paymentValidation']);
Route::get('/status/{token}/{payToken}/{id}',[VoteController::class,'getPaymentStatus']);
Route::get('/candidate/{slug}',[PageController::class,'profile'])->name('candidate.profile');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
