<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@Home');
Route::get('/Home', 'HomeController@Home')->name('home');
Route::get('/JigoroKano', 'JigoroKanoController@Jigoro')->name('jigoro.kano');
Route::get('/Kodokan', 'KodokanController@Kodokan')->name('kodokan');
Route::get('/Galeria', 'GaleriaController@Galeria')->name('galeria');
Route::get('/OndeTreinar', 'OndeTreinarController@OndeTreinar')->name('onde.treinar');


// Route::group([ 'prefix' => 'admin', 'middleware' => 'auth' ], function () {
//     Route::get('dashboard', 'DashboardAdminController@index');
//     Route::get('sobre-nos', 'SobreNosAdminController@edit');
//     Route::post('sobre-nos', 'SobreNosAdminController@editHandler');
// });
