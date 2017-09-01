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
    return view('welcome');
});

Route::get('/project/{id}', function ($id) {
    $project = App\Project::find($id);

    return view('project', compact('project'));
});

Route::get('/issue/{id}', function ($id) {
    $issue = App\Issue::find($id);

    return view('issue', compact('issue'));
});
