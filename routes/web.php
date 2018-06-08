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
    return view('public.pages.index');
});
Route::get('/apropos', function () {
    return view('public.pages.about');
});
Route::get('/entreprises', function () {
    return view('public.pages.entreprises');
});
Route::get('/classement', function () {
    return view('public.pages.classement');
});
Route::get('/conseils', function () {
    return view('public.pages.conseils');
});
Route::get('/contact', function () {
    return view('public.pages.contact');
});
Route::get('/list-entreprises', function () {
    return view('public.pages.listEntreprises');
});
Route::get('/modeles-voitures', function () {
    return view('public.pages.modelesVoitures');
});
Route::get('/nouvelles', function () {
    return view('public.pages.nouvelles');
});
Route::get('/article', function () {
    return view('public.pages.singleArticle');
});
Route::get('/resultat', function () {
    return view('public.pages.resultat');
});
Route::get('/voitures', function () {
    return view('public.pages.voitures');
});
