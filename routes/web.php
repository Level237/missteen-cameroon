<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\CandidateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MomoController;

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

Route::post('notify/momo',[VoteController::class,'notifyMomo']);
Route::get('/inscription',[PageController::class,'inscription'])->name('inscription');
Route::get('test',function(){
    return view('test');
})->name('test');


Route::get('/miss/elues/{category}',[CandidateController::class,'missElu'])->name('miss.elues');
Route::post('send',[ContactController::class,"sendContact"])->name('contact.send');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/candidate/create',[CandidateController::class,'create'])->name('candidate.create')->middleware('auth');
Route::get('/list/candidates',[PageController::class,'candidates'])->name('candidate.list');
Route::get('/payment/successfull/{candidateId}/{vote}/{price}/{type}',[VoteController::class,'success']);
Route::get('/payment/successfull/momo/{candidateId}/{vote}/{price}/{type}',[VoteController::class,'successMomo']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('generate/messageId/{token}/{price}/{number}/{candidateId}/{score}',[MomoController::class,'getPay']);
Route::get('redirect/profile',[PageController::class,'redirect'])->name('redirect.profile');
Route::get('jeVotePour/{slug}',[PageController::class,'vote'])->name('candidate.vote');

//Om routes
Route::get('access/{price}/{slug}/{vote}/{candidateId}/{type}',[VoteController::class,'payment']);
Route::get('validation/{token}/{payToken}/{number}/{amount}/{candidateId}/{vote}',[VoteController::class,'paymentValidation']);
Route::post('notify/om',[VoteController::class,"notifyOm"]);
Route::get('/status/{token}/{payToken}/{price}/{slug}/{vote}/{candidateId}/{type}',[VoteController::class,'getPaymentStatus']);


Route::get('/candidate/{slug}',[PageController::class,'profile'])->name('candidate.profile');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('contact/list',[ContactController::class,'list'])->name('contact.list');
});

Route::get('comming-soon',function(){
    return view('pages.maintenance');
});
Route::get('list/votes',[PageController::class,'listVote'])->name('list.vote');
Route::get('init/pay/momo/{price}/{number}/{candidateId}/{vote}',[MomoController::class,'initPay']);
Route::get('status/pay/momo/{messageId}/{token}',[MomoController::class,'getStatus']);


require __DIR__.'/auth.php';
