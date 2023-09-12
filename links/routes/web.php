<?php

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

use App\Http\Controllers\LinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-links/{id}', [LinkController::class, 'index'])->middleware('auth');

Route::get('/add-links', [LinkController::class, 'add_links']);

Route::get('/edit-link/{id}', [LinkController::class, 'edit'])->middleware('auth');

Route::get('/delete/{id}', [LinkController::class, 'delete'])->middleware('auth');

Route::post('/numero', [LinkController::class, 'numero']);

Route::put('/update', [LinkController::class, 'update']);

Route::post('/links', [LinkController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
