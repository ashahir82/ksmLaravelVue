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

Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::get('/documents/edit/{document}', [DocumentController::class, 'edit'])->name('documents.edit');
Route::post('/', [DocumentController::class, 'store'])->name('documents.store');
Route::patch('/documents/update/{document}', [DocumentController::class, 'update'])->name('documents.update');
Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');
