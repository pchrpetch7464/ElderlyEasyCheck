<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\QuestionController;
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
});
Route::get('/About', [MyController::class, 'About']);
Route::get('/Exam', [MyController::class, 'Exam']);
Route::get('/QandA', [MyController::class, 'QandA'])->name('QandA');

Route::get('/Examination', [MyController::class, 'Examination']);
Route::get('/ChestandLung', [MyController::class, 'ChestandLung']);
Route::get('/Heart', [MyController::class, 'Heart']);

Route::get('/LookCaL', [MyController::class, 'LookCaL']);
Route::get('/FeelCaL', [MyController::class, 'FeelCaL']);
Route::get('/KnockCaL', [MyController::class, 'KnockCaL']);
Route::get('/ListenCaL', [MyController::class, 'ListenCaL']);

Route::get('/LookHeart', [MyController::class, 'LookHeart']);
Route::get('/FeelHeart', [MyController::class, 'FeelHeart']);
Route::get('/KnockHeart', [MyController::class, 'KnockHeart']);
Route::get('/ListenHeart', [MyController::class, 'ListenHeart']);

Route::post('/QandA/add', [QuestionController::class, 'insertQ'])->name('addQuestion');
Route::get('/QandA/edit/{id}', [QuestionController::class, 'editQuestion']);
Route::post('/QandA/update/{id}', [QuestionController::class, 'updateQuestion']);
Route::get('/QandA/delete/{id}', [QuestionController::class, 'deleteQuestion']);
// Route::get('/QandA/delete/{id}', [QuestionController::class, 'deleteQuestion']);
Route::get('/QandA/talk/{id}', [QuestionController::class, 'talk']);

Route::post('/QandA/add/talk/add', [MessageController::class, 'insertM'])->name('addRmessage');
// Route::post('/QandA/update/{id}', [MessageController::class, 'updateRmassage']);
// Route::get('/QandA/delete/{id}', [MessageController::class, 'deleteRmassage']);
