<?php

use App\Http\Controllers\QueryReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/tickets/create', [TicketController::class, 'create']);
Route::post('/tickets/store',  [TicketController::class, 'store']);

Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    // Route for displaying query reports form
    Route::get('/query-reports', [QueryReportController::class, 'index'])->name('query.reports');

    // Route for handling the form submission
    Route::post('/query-reports', [QueryReportController::class, 'generateReport'])->name('query.generate-report');
});
