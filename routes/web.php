<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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
// sign page
Route::get('/create',[UserController::class, 'create'])
    ->name('create');
Route::post('/store',[UserController::class, 'store'])
    ->name('store');
Route::post('/login',[UserController::class, 'login'])
    ->name('login');
// home page
Route::get('/home',[UserController::class,'index'])
    ->name('home');
Route::post('/addService', [ServiceController::class, 'store'])
    ->name('addService');
// My services
Route::get('/myService',[ServiceController::class,'myService'])
    ->name('myService');
// delete
Route::delete('/delete/{id}', [ServiceController::class, 'destroy'])
    ->name('delete');
// modify the service
Route::get('/modify/{id}', [ServiceController::class,'modify'])
    ->name('modify');
Route::put('/update', [ServiceController::class, 'update'])
    ->name('update');
// modify profile
Route::get('/modifyProfile', [UserController::class,'modifyProfile'])
    ->name('modifyProfile');
Route::put('/updateProfile', [UserController::class, 'updateProfile'])
    ->name('updateProfile');
// contact page
Route::get('/contact/{id}',[ContactController::class, 'contact'])
    ->name('contact');
// add msg page
Route::get('/addMsg/{id}',[ContactController::class, 'addMsg'])
    ->name('addMsg');
Route::post('/storeMsg',[ContactController::class, 'storeMsg'])
    ->name('storeMsg'); 
// location page
Route::get('/locations',[UserController::class, 'location'])
    ->name('locations');
// news page
Route::get('/news',[UserController::class, 'news'])
    ->name('news');
// news page
// Route::get('/profile',[Controller::class, 'profile'])
//     ->name('profile');
// services page
Route::get('/services',[ServiceController::class, 'service'])
    ->name('services');
// team page
Route::get('/team',[UserController::class, 'team'])
    ->name('team');