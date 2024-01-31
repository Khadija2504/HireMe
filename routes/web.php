<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
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
Route::get('/create',[Controller::class, 'create'])
    ->name('create');
Route::post('/store',[Controller::class, 'store'])
    ->name('store');
Route::post('/login',[Controller::class, 'login'])
    ->name('login');
// home page
Route::get('/home',[Controller::class,'index'])
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
// contact page
Route::get('/contact',[ContactController::class, 'contact'])
    ->name('contact');
// profile page
Route::get('/locations',[Controller::class, 'location'])
    ->name('locations');
// service page
Route::get('/news',[Controller::class, 'news'])
    ->name('news');
// news page
Route::get('/profile',[Controller::class, 'profile'])
    ->name('profile');
// locations page
Route::get('/services',[ServiceController::class, 'service'])
    ->name('services');
// team page
Route::get('/team',[Controller::class, 'team'])
    ->name('team');