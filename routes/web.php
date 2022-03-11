<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Canecas;
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
Route::get('/sobrenos', function(){
    return view('sobrenos');
});

Route::get('/cadastrarcaneca', [Canecas::class, 'cadastrar_caneca']);

Route::get('/cadastrarcanecas_store', [Canecas::class, 'cadastrarcan_store']);
// Route::get('/cadastrarcanecas_store', function(){
//     return view('sobrenos');
// });