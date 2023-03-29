<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('job', function () {
    return view('JobForm');
});
Route::get('Admin', function () {
    return view('AdminPanel');
});
Route::get('Applicantions', function () {
    return view('Applicantions');
});
Route::get('SearchRecord', function () {
    return view('SearchRecord');
});
Route::get('index', function () {
    return view('index');
});

Route::post('form_save','App\Http\Controllers\JobFormController@CandidateInfo');

Route::post('form_submit','App\Http\Controllers\JobFormController@AdminCredentials');

Route::get('Review/{id}','App\Http\Controllers\JobFormController@ShowApplication');

Route::get('Applicantions','App\Http\Controllers\JobFormController@DisplayCandidateList');

Route::get('Review/process/{id}/{candidate}','App\Http\Controllers\JobFormController@Choice');

Route::get('Applicantions/{id}','App\Http\Controllers\JobFormController@DeleteApplicant');

Route::post('search_record','App\Http\Controllers\JobFormController@Search');


