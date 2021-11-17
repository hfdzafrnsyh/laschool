<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Forum\ForumController;


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

Route::get('/' , [SiteController::class , 'welcome']);
Route::post('/siswa/daftar' , [SiteController::class , 'daftar']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','Role:admin']],function(){

 Route::get('/users' , [UserController::class , 'index']);   

 Route::get('/users/{user}/profile' , [UserController::class , 'profile']);
// siswa
Route::get('/siswa' , [SiswaController::class , 'index']);
Route::post('/siswa/create' , [SiswaController::class , 'create']);
Route::get('/siswa/{siswa}/edit' , [SiswaController::class , 'edit']);
Route::put('/siswa/{siswa}' , [SiswaController::class , 'update']);
Route::delete('/siswa/{siswa}' , [SiswaController::class , 'delete']);
Route::get('/siswa/{siswa}/detail' , [SiswaController::class , 'detail']);
Route::post('/siswa/{siswa}/add-nilai' , [SiswaController::class , 'addNilai']);

});


Route::group(['middleware' => ['auth','Role:admin,siswa']],function(){
    Route::get('/dashboard' , [DashboardController::class , 'index']);
    Route::get('/forum' , [ForumController::class , 'index']);
    Route::post('/forum/create' , [ForumController::class , 'create']);
    Route::get('/forum/{forum}/view' , [ForumController::class , 'view']);
    Route::post('/forum/{forum}/view' ,[ForumController::class , 'postcomment']);
});

Route::group(['middleware' => ['auth' , 'Role:siswa']],function(){
    
    Route::get('/siswa/profile' , [SiswaController::class , 'profile']);

});
