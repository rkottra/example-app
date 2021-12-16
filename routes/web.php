<?php

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
/*
Route::get('/', function () {
    //return view('welcome');
    return 'Hello World';
});

Route::get('/json', function () {
    return '["a", "b", "c"]';
});

use App\Http\Controllers\első;
Route::get('/elso', [első::class, 'Kiírás']);
Route::get('/masodik/{id}', [első::class, 'Próba2']);
*/

use App\Http\Controllers\adatbázis;
Route::get('/db', [adatbázis::class, 'TáblaHTML']);
Route::get('/db/{poszt}', [adatbázis::class, 'TáblaHTML']);
Route::get('/db/{poszt}/{betu}', [adatbázis::class, 'TáblaHTML']);

Route::get('/json', [adatbázis::class, 'TáblaJSON']);
Route::get('/json/{poszt}', [adatbázis::class, 'TáblaJSON']);
Route::get('/json/{poszt}/{betu}', [adatbázis::class, 'TáblaJSON']);
