<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SendEmailController;


Route::view('/', 'welcome');

Route::view('/about', 'pages.about.about');

Route::view('/solutions', 'pages.solutions');

Route::view('/news', 'pages.news');

Route::view('/sisusetha', 'pages.sisusetha');

Route::view('/leaders', 'pages.about.leadership');

Route::view('/directors', 'pages.about.directors');

Route::view('/managers', 'pages.about.managers');

Route::view('/rewards', 'pages.about.reward');

Route::view('/gallery', 'pages.gallery');

Route::view('/branchn', 'pages.branchnetwork');

Route::view('/news', 'pages.news');

Route::view('/health', 'pages.health');

Route::view('/help', 'pages.helpsupport');

Route::view('/fire', 'pages.fire');

Route::view('/retirement', 'pages.retirement');

Route::view('/education', 'pages.education');

Route::view('/loader', 'landing');

Route::view('/mbrt', 'pages.nbrtmembers');

Route::view('/invesment', 'pages.invesment');

Route::view('/protection', 'pages.protection');

Route::view('/documents', 'pages.document');

Route::view('/pay', 'pages.easypay');

Route::view('/complains', 'pages.complains');

Route::view('/procedure', 'pages.complainprocedure');

Route::view('/users', 'pages.login.logcategories');

// Mail Service
// Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
// Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

//Carrers
Route::view('/careers', 'pages.careers');
Route::post('/carrers', [CareerController::class, 'store']);


// Portal
// Route::view('/customer', 'pages.login.customer');
// Route::get('customer', 'UserController@userLoginIndex');

// Route::view('/member', 'pages.login.member'); --> Service in Dimuthu Aiya Hand


Route::get('/user-registration', [CustomerController::class, 'index']);

Route::post('/user-store', [CustomerController::class, 'userPostRegistration']);

Route::get('/customer', [CustomerController::class, 'userLoginIndex']);

Route::post('/login', [CustomerController::class, 'userPostLogin']);

Route::get('/dashboard', [CustomerController::class, 'dashboard']);

Route::get('/logout', [CustomerController::class, 'logout']);


// Email
Route::get('/contact', [SendEmailController::class, 'index']);

Route::post('/contact/send', [SendEmailController::class, 'send']);
