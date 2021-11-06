<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

// });


Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user/detail', 'API\UserController@details');
    Route::post('logout', 'API\UserController@logout');
}); 

//Data User
Route::post('/data_user', 'API\DataUserController@tambahData');
Route::get('/read_user', 'API\DataUserController@tampilData');
Route::patch('/update_user/{id}', 'API\DataUserController@updateData');
Route::delete('/delete_user/{id}', 'API\DataUserController@deleteData');
Route::get('/get_user/{id}', 'API\DataUserController@getData');

//Data Gejala
Route::post('/data_gejala', 'API\DataGejalaController@tambahData');
Route::get('/read_gejala', 'API\DataGejalaController@tampilData');
Route::patch('/update_gejala/{id}', 'API\DataGejalaController@updateData');
Route::get('/get_gejala/{id}', 'API\DataGejalaController@getData');
Route::delete('/delete_gejala/{id}', 'API\DataGejalaController@deleteData');

//Data Diagnosis
Route::post('/data_diagnosis', 'API\DataDiagnosisController@tambahData');
Route::get('/read_diagnosis', 'API\DataDiagnosisController@tampilData');
Route::patch('/update_diagnosis/{id}', 'API\DataDiagnosisController@updateData');
Route::get('/get_diagnosis/{id}', 'API\DataDiagnosisController@getData');
Route::delete('/delete_diagnosis/{id}', 'API\DataDiagnosisController@deleteData');

//Data Rule
Route::post('/data_rule', 'API\DataRoleController@tambahData');
Route::get('/read_rule', 'API\DataRoleController@tampilData');
Route::patch('/update_rule/{id}', 'API\DataRoleController@updateData');
Route::delete('/delete_rule/{id}', 'API\DataRoleController@deleteData');
Route::get('/get_rule/{id}', 'API\DataRoleController@getData');

//hasil data diagnosa
Route::get('/hasil_diagnosa', 'API\DataRoleController@tampilData');


