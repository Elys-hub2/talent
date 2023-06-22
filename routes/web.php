<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemandeinscriptionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\UserController;
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

Route::get('/prime', function () {
    return view('welcome');
})->name('prime');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/appem-layout', [EmployeController::class, 'index'])->name('appem');
    Route::get('/appsta-layout', [StagiaireController::class, 'index'])->name('appsta');
});

Route::get('/email', function () {
    return view('emails.order');
}) ->name('email');

Route::get('/appem-layout', function() {
    return view('Dashboardemploye');
})->name('appem');


Route::get('/confirm-password', function () {
    return view('auth.confirm-password');
})->middleware('auth')->name('password.confirm');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::get('order', [OrderController::class, 'create'])->name('order.create');
Route::post('order', [OrderController::class, 'store'])->name('order.store');

Route::get('/demandeinscription/create', [DemandeinscriptionController::class, 'create'])->name('demandeinscription.create');
Route::get('/demandeinscription', [DemandeinscriptionController::class, 'index'])->name('demandeinscription.index');
Route::post('demandeinscription', [DemandeinscriptionController::class, 'store'])->name('demandeinscription.store');
Route::delete('/demandeinscription/{id_demande}', [DemandeinscriptionController::class, 'destroy'])->name('demandeinscription.destroy');
Route::get('/demandeinscription/{id_demande}/edit', [DemandeinscriptionController::class, 'edit'])->name('demandeinscription.edit');
Route::get('/demandeinscription/{id_demande}', [DemandeinscriptionController::class, 'show']);
Route::post('/demandeinscription/{id_demande}', [DemandeinscriptionController::class, 'update'])->name('demandeinscription.update');


Route::resource('demandeinscription', DemandeinscriptionController::class);


