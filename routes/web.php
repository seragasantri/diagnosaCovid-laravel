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

Route::get('/', function () {
    return view('auth\login');
});

// Route::get('/', 'AuthController@showFormLogin')->name('login');
// Route::get('masuk', 'AuthController@showFormLogin')->name('login');
// Route::post('masuk', 'AuthController@login');



Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
    // DATA USER
    Route::get('/Data_User', 'DataUserController@index')->name('Data_User');
    Route::get('/Tambah_Data_User', 'DataUserController@tambah')->name('Tambah_Data_User');
    Route::post('/Create_Data_User', 'DataUserController@create')->name('Create_Data_User');
    Route::get('/Read_Data_User/{id}', 'DataUserController@show')->name('Read_Data_User');
    Route::get('/edit_Data_User/{id}', 'DataUserController@edit')->name('Edit_Data_User');
    Route::PATCH('/Update_Data_User/{id}', 'DataUserController@update')->name('Update_Data_User');
    Route::get('/Delete_Data_User/{id}', 'DataUserController@destroy')->name('Delete_Data_User');
    
    // DATA GEJALA
    Route::get('/Data_Gejala', 'DataGejalaController@index')->name('Data_Gejala');
    Route::get('/Tambah_Data_Gejala', 'DataGejalaController@create')->name('Tambah_Data_Gejala');
    Route::post('/Create_Data_Gejala', 'DataGejalaController@store')->name('Create_Data_Gejala');
    Route::get('/Read_Data_Gejala/{id}', 'DataGejalaController@show')->name('Read_Data_Gejala');
    Route::get('/Edit_Data_Gejala/{id}', 'DataGejalaController@edit')->name('Edit_Data_Gejala');
    Route::patch('/Update_Data_Gejala/{id}', 'DataGejalaController@update')->name('Update_Data_Gejala');
    

    // DATA DIAGNOSIS
    Route::get('/Data_Diagnosis', 'DataDiagnosisController@index')->name('Data_Diagnosis');
    Route::get('/Tambah_Data_Diagnosis', 'DataDiagnosisController@create')->name('Tambah_Data_Diagnosis');
    Route::post('/Create_Data_Diagnosis', 'DataDiagnosisController@store')->name('Create_Data_Diagnosis');
    Route::get('/Read_Data_Diagnosis/{id}', 'DataDiagnosisController@show')->name('Read_Data_Diagnosis');
    Route::get('/Edit_Data_Diagnosis/{id}', 'DataDiagnosisController@edit')->name('Edit_Data_Diagnosis');
    Route::patch('/Update_Data_Diagnosis/{id}', 'DataDiagnosisController@update')->name('Update_Data_Diagnosis');
    
    // DATA RULE
    Route::get('/Data_Role', 'DataRoleController@index')->name('Data_Role');
    Route::get('/Tambah_Data_Role', 'DataRoleController@create')->name('Tambah_Data_Role');
    Route::post('/Create_Data_Role', 'DataRoleController@store')->name('Create_Data_Role');
    Route::get('/Read_Data_Role/{id}', 'DataRoleController@show')->name('Read_Data_Role');
    Route::get('/Delete_Data_Role/{id}', 'DataRoleController@destroy')->name('Delete_Data_Role');
    
    // DATA DIAGNOSA
    Route::get('/Hasil_Data', 'HasilDiagnosaController@index')->name('Hasil_Data');
    Route::get('/Read_Hasil_Data/{id}', 'HasilDiagnosaController@show')->name('Read_Hasil_Data');
});
    

// Route::middleware(['checkrole:Pengunjung'])->group(function () {
//     Route::get('/home', 'Pengunjung\HomeController@index')->name('home_pengunjung');  
// });
