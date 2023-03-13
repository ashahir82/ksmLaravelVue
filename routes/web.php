<?php

use App\Http\Controllers\DocumentController;
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
    return view('welcome', [
        'name' => 'Ahmad Shahir',
        'workplace' => 'Jabatan Tenaga Manusia',
    ]);
});

Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
