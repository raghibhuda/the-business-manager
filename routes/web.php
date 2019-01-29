<?php

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
    return view('index');
});




// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register/{type?}', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register/{type?}', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');
// ===========Company routes===========

Route::post('/home/create-company','CompanyController@storeCompany')->name('create-company');
Route::get('/home/company-profile','CompanyController@companyProfile')->name('company-profile');

//Project
Route::get('/home/company/create-project','ProjectController@createProject')->name('create-project');
Route::post('/home/company/create-project','ProjectController@storeProject')->name('create-project');
Route::get('/home/company/projects-all','ProjectController@allProjects')->name('all-projects');
Route::get('/home/company/project/{id}','ProjectController@viewProjectWithEmployeesAndTasks')->name('view-project');
Route::post('/home/company/assign-project','ProjectController@assignEmployees');


// Route::get('/home/company/show-project/{id}','ProjectController@viewProject')->name('view-project');
// Route::get('/home/company/show-project/{id}','ProjectController@viewProject')->name('view-project');




//Task 
Route::post('/home/company/create-task','TaskController@create');
Route::post('/home/company/assign-task','TaskController@assignTask');
Route::delete('/home/company/delete-task','TaskController@delete');





