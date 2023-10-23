<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']) -> prefix('admin')->group(function () {
    Route::get('/dashboard', [Controller::class, 'dashboard']) -> name('dashboard');
    Route::post('/send-email', [Controller::class, 'send_email']) -> name('send-email');
});
