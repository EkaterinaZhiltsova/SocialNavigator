<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DoctorController;
use App\Mail\WelcomeMail;
use App\Mail\WelcomeMail2;
use Illuminate\Support\Facades\Mail;
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

/*Route::get('/', function () {
    return view('Navi');
});*/
Route::get('/', 'App\Http\Controllers\HomeController@getContent')->name('mains');

Route::get('/Navi1', 'App\Http\Controllers\DoctorController@getDoctor')->name('mains');

Route::get('/Navi2', 'App\Http\Controllers\VolController@getVol')->name('mains');


#Route::get('/href', function () {
#    return view('href');
#});

/*Route::get('/Form_doctor', function () {
    return view('Form_doctor');
});*/

Route::get('/Form_doctor/{ID_doctor}', 'App\Http\Controllers\StudentsApplicationsController@form')->name('Form_doctor');


Route::get('/result_doctor_form', 'App\Http\Controllers\StudentsApplicationsController@result');
Route::post('/result_doctor_form', 'App\Http\Controllers\StudentsApplicationsController@result');

/*Route::get('/Form_activities', function () {
    return view('Form_activities');
});*/

Route::get('/Form_activities', 'App\Http\Controllers\VolunteersApplicationsController@form');
Route::post('/Form_activities', 'App\Http\Controllers\VolunteersApplicationsController@form');

Route::get('/result_volunteer_form', 'App\Http\Controllers\VolunteersApplicationsController@result');
Route::post('/result_volunteer_form', 'App\Http\Controllers\VolunteersApplicationsController@result');

Route::get('/buildings', function () {
	//сюда метод контролера
	//Route::get('/si/time_control', 'Special\TimeControlController@main'); 
    return view('buildings');
});
Route::get('/Navi1/{$ID_doctor}', 'App\Http\Controllers\StudentsApplicationsController@form');

Route::get('/profile', function () {
	//сюда метод контролера
	//Route::get('/si/time_control', 'Special\TimeControlController@main'); 
    return view('profile');
});
Route::get('/table_forAdmin_doc', function () {
    return view('table_forAdmin_doc');
});
//Route::get('/{id}', 'App\Http\Controllers\HomeController@getStr');

Route::get('/table_forAdmin_vol', 'App\Http\Controllers\Admin_vol_app@getVolAct_admin')->name('mains');
Route::get('/table_forAdmin_doc', 'App\Http\Controllers\Admin_doc_app@getVolAct_admin')->name('mains');


//Route::get('/Navi1_{$ID_doctor}', 'App\Http\Controllers//////\StudentsApplicationsController@form');

Route::get('/profile', 'App\Http\Controllers\Admin_applications@getVolAct_admin')->name('mains');


//Route::get('_{id}', 'App\Http\Controllers\HomeController@getStr');
Route::get('/email', function() {
Mail::to('ksvetova16@gmail.com')->send(new WelcomeMail());
return new WelcomeMail();
});

Route::get('/email2', function() {
    Mail::to('ksvetova16@gmail.com')->send(new WelcomeMail2());
    return new WelcomeMail2();
    });

    Route::get('/email3', function() {
        Mail::to('ksvetova16@gmail.com')->send(new WelcomeMail3());
        return new WelcomeMail3();
        });