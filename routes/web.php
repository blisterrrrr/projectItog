<?php

use App\Models\Task;
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
    $tasks = Task::orderBy('id', 'desc')->paginate(16);
    return view('main', [
        'tasks' => $tasks
    ]);
})->name('main');

Route::get('/create', function (){
    return view('create');
})->name('create')->middleware('auth');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'log'])->name('post.log');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'save'])->name('post.reg');
