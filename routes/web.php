<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::view('/signup', 'pages.signin');

Route::view('/contact', 'pages.contact');

Route::view('/about', 'pages.about');

Route::view('/solutions', 'pages.solutions');

Route::view('/news', 'pages.news');

Route::view('/careers', 'pages.careers');

Route::view('/sisusetha', 'pages.sisusetha');

Route::view('/leaders', 'pages.leadership');

Route::view('/rewards', 'pages.reward');

Route::view('/gallery', 'pages.gallery');

Route::view('/branchn', 'pages.branchnetwork');

Route::view('/news', 'pages.news');

Route::view('/health', 'pages.health');

Route::view('/fire', 'pages.fire');

Route::view('/retirement', 'pages.retirement');

Route::view('/education', 'pages.education');

Route::view('/loader', 'landing');

Route::view('/nbrt', 'pages.nbrtmembers');

Route::view('/invesment', 'pages.invesment');

Route::view('/protection', 'pages.protection');