<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
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
Route::get('/Dashboard',[DashboardController::class, 'index']);

Route::get('/',[UsersController::class, 'login']);
Route::post('userLogin',[UsersController::class, 'userLogin']);
Route::post('userBranch',[UsersController::class, 'userBranch']);
Route::post('cbLogin',[UsersController::class, 'cbLogin']);
Route::get('logout',[UsersController::class, 'userLogout']);

//workers
Route::get('/workers', function () {
    return view('workers/workers');
})->name('workers');

Route::get('register-worker', [WorkerController::class, 'register']);
Route::get('add-worker', [WorkerController::class, 'addWorker']);
Route::post('add-edit-worker', [WorkerController::class, 'addEditWorker']);
Route::post('status-change-worker', [WorkerController::class, 'statusUpdate']);
Route::get('edit-worker/{id}', [WorkerController::class, 'editWorker']);
Route::get('status-worker/{id}', [WorkerController::class, 'statusChange']);
Route::get('edit-document/{id}', [WorkerController::class, 'editDocument']);
Route::get('docs-worker/{id}', [WorkerController::class, 'docsWorker']);
Route::get('docs-view-worker/{id}', [WorkerController::class, 'docsviewWorker']);
Route::get('worker-view/{id}', [WorkerController::class, 'viewWorker']);
Route::post('add-docs', [WorkerController::class, 'addDocs']);
Route::post('edit-docs', [WorkerController::class, 'editDocs']);
Route::get('worker-list', [WorkerController::class, 'workerList']);
Route::get('worker-delete/{id}', [WorkerController::class, 'workerDelete']);
Route::post('worker-delete', [WorkerController::class, 'workerDelete']);
Route::get('document-delete/{id}', [WorkerController::class, 'documentDelete']);
Route::post('document-delete', [WorkerController::class, 'documentDelete']);
Route::get('attendance', [WorkerController::class, 'worker_attendance']);
Route::get('worker-attendance', [WorkerController::class, 'all_worker_attendance']);
Route::post('update-attendance', [WorkerController::class, 'update_attendance']);
Route::get('attendance-view/{id}', [WorkerController::class, 'view_attendance']);
Route::post('approve-attendance', [WorkerController::class, 'approve_attendance']);
Route::post('attendance-report', [WorkerController::class, 'attendance_report']);
Route::get('attendance-report', [WorkerController::class, 'attendance_report']);
Route::post('attendance-report-worker', [WorkerController::class, 'attendance_report_worker']);
Route::get('attendance-report-worker', [WorkerController::class, 'attendance_report_worker']);
// Route::get('attendance-reports', [WorkerController::class, 'report']);


Route::get('worker-logout', [LoginController::class, 'logout']);
Route::get('worker-login', [LoginController::class, 'login']);
Route::post('worker-portal', [LoginController::class, 'worker_login']);
Route::get('change-password', [LoginController::class, 'change_password']);
Route::post('update-password', [LoginController::class, 'update_password']);

Route::get('worker-dashboard', function () {
    return view('workers/dashboard');
})->name('worker-dashboard');