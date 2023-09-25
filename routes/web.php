<?php

use App\Http\Controllers\WorkerController;
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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/workers',[WorkerController::class,'workerList'])->name('workers');
//workers
Route::get('popup-details/{type}',[WorkerController::class,'popupDetails']);
Route::post('add-edit-worker',[WorkerController::class,'addEditWorker']);
Route::get('edit-worker/{id}',[WorkerController::class,'editWorker']);
Route::get('worker-list',[WorkerController::class,'workerList']);
Route::get('worker-delete/{id}',[WorkerController::class,'workerDelete']);
