<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\cobacontroller;
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

Route::get('/coba', function () {
    return view(' coba');
});

//Route::get('/coba/{no}',  [cobacontroller::class, 'coba']);

//Route::get('/test', [cobacontroller::class, 'index']);

//Route::get('/test/{ke}', [cobacontroller::class, 'urutan']);


Route::get('', [cobacontroller::class, 'index']);
//Route::get('/friends', [cobacontroller::class, 'index']);
//Route::get('/friends/create', [cobacontroller::class, 'create']);
//Route::post('/friends', [cobacontroller::class, 'store']);
//Route::get('/friends/{id}', [cobacontroller::class, 'show']);
//Route::get('/friends/{id}/edit', [cobacontroller::class, 'edit']);
//Route::put('/friends/{id}', [CobaController::class, 'update']);
//Route::delete('/friends/{id}', [CobaController::class, 'destroy']);

//Route::resource('friends', CobaController::class);
Route::resources([
    'friends' => CobaController::class,
    'groups' => GroupsController::class,
]);
