<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\PaymentController;
use App\Models\Route as ModelsRoute;
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

Route::get('/', [LinkController::class, 'home'])->name('welcome');

Route::get('/dashboard', [LinkController::class, 'account'])->middleware(['auth'])->name('dashboard');


Route::get('/contact', [LinkController::class, 'contact'])->name('contactus');
Route::get('/services', [LinkController::class, 'service'])->name('ourservices');

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('callback');


Route::middleware('auth')->group(function () {
    Route::get('/my-tickets', [PaymentController::class, 'tickets'])->name('tickets');
    Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/complete/{id}', [PaymentController::class, 'complete'])->name('completepay');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

include ('admin.php');
require __DIR__.'/auth.php';
