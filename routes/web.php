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
    // Route::get('/isiKuesioner', function () {
    //         return view('/responden/isiKuesioner');
    //     });
        
        
    Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');
}); 
// Route::get('crud/simpanData', 'SimpanDataController@simpan')->name('crud.simpan');
Route::resource('responden', 'RespondenController');


// CONTROLLER ADMIN/RESPONDEN JANGAN DIUBAH MEH TEU LIEUR!

// Create HalamanAdmin

Route::get('/tambahPertanyaan', 'KelolaController@create');


// Show (harusnya pake parameter)

Route::get('/dataResponden', 'AdminController@show');
Route::get('/dataRespondenDetail', 'RespondenController@show');


// Index ADMIN / CONTROLLER
Route::get('/halamanAdmin', 'AdminController@index');
Route::get('/isiKuesioner', 'RespondenController@index');
Route::get('/isiKuesioner/{kategori}', 'RespondenController@index');
Route::get('/kelolaPertanyaan', 'KelolaController@index');


// DELETE
Route::delete('/dataResponden/{id}', 'RespondenController@destroy');
Route::delete('/kelolaPertanyaan/{id}', 'KelolaController@destroy');


// UPDATE
Route::get('/dataResponden/{id}/edit/', 'RespondenController@edit');
Route::match(['get', 'post'], '/edit{id}', 'KelolaController@edit');



// STORE TEING FUNGSINA NAON :()
Route::post('/pertanyaan', 'KelolaController@store');