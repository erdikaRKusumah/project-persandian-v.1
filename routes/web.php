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


//1 (Gak boleh kebalik)
Route::post('/','otentikasi\OtentikasiController@login')->name('login');
//2
Route::get('/','otentikasi\OtentikasiController@index')->name('login');

Route::get('reload-captcha', 'otentikasi\OtentikasiController@reloadCaptcha');

// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/isiData', function () {
    
//         return view('/responden/isiData');
//     });
//     Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');
// }); 
Route::group(['middleware' => 'auth'], function(){
    Route::get('/halamanAdmin', function () {
    
        return view('/admin/halamanAdmin');
    });
    Route::get('/isiData', function () {
    
        return view('/responden/isiData');
    });
    Route::get('/isiKuesioner', function () {
    
        return view('/responden/isiKuesioner');
    });
    Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');
}); 
// Route::get('crud/simpanData', 'SimpanDataController@simpan')->name('crud.simpan');
Route::resource('responden', 'RespondenController');
Route::post('/pertanyaan', 'KelolaController@store');

Route::get('/tambahPertanyaan', 'KelolaController@create');
Route::get('/halamanAdmin', 'AdminController@index');

Route::get('/dataResponden', 'AdminController@show');

Route::delete('/dataResponden/{id}', 'RespondenController@destroy');
Route::get('/dataRespondenDetail', 'RespondenController@show');

Route::get('/kelolaPertanyaan', 'KelolaController@index');
Route::delete('/kelolaPertanyaan/{id}', 'KelolaController@destroy');

Route::get('/isiKuesioner', 'RespondenController@index');
Route::match(['get', 'post'], '/edit{id}', 'KelolaController@edit');