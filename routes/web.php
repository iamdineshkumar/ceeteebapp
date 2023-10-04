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
//workers
Route::get('/workers', function () {
    return view('workers');
})->name('workers');

Route::get('popup-details/{type}', [WorkerController::class, 'popupDetails']);
Route::post('add-edit-worker', [WorkerController::class, 'addEditWorker']);
Route::get('edit-worker/{id}', [WorkerController::class, 'editWorker']);
Route::get('edit-document/{id}', [WorkerController::class, 'editDocument']);
Route::get('docs-worker/{id}', [WorkerController::class, 'docsWorker']);
Route::get('docs-view-worker/{id}', [WorkerController::class, 'docsviewWorker']);
Route::get('worker-view/{id}', [WorkerController::class, 'viewWorker']);
Route::post('add-docs', [WorkerController::class, 'addDocs']);
Route::post('edit-docs', [WorkerController::class, 'editDocs']);
Route::get('worker-list', [WorkerController::class, 'workerList']);
Route::get('worker-delete/{id}', [WorkerController::class, 'workerDelete']);
Route::get('document-delete/{id}', [WorkerController::class, 'documentDelete']);
