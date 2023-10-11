<?php

use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\TicketController;

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [RouteController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/admin.add_route', [RouteController::class, 'addroute'])->name('admin.add_route');
    Route::get('/admin.add_route/view', [RouteController::class, 'view'])->name('admin.routeview');
    Route::get('/admin.routeview', [RouteController::class, 'route'])->name('admin.route');
    Route::get('/admin.add_ticket/view', [TicketController::class, 'view'])->name('admin.ticketview');
    Route::get('/admin.ticket/view', [TicketController::class, 'ticket'])->name('admin.view');
    Route::get('/admin.user/view', [TicketController::class, 'user'])->name('admin.userview');

});
