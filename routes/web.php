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

Route::get('/new-project', function () {
    return view('new-project');
});

Route::post('/new-project', function(){
    $project = new App\Project();

    $project->name = Request::get('name');

    $project->save();

    return redirect('/project/' . $project->id);
});

Route::get('/project/{id}', function ($id) {
    $project = App\Project::find($id);

    return view('project', compact('project'));
});

Route::get('/project/{id}/new-issue', function ($id) {
    $project = App\Project::find($id);

    return view('new-issue', compact('project'));
});

Route::post('/new-issue', function(){
    $issue = new App\Issue();

    $issue->title = Request::get('title');

    $issue->status = 0;

    $issue->project_id = Request::get('project_id');

    $issue->save();

    $comment = new App\Comment();

    $comment->issue_id = $issue->id;

    $comment->content = Request::get('content');

    $comment->save();

    return redirect('/issue/' . $issue->id);
});

Route::get('/issue/{id}', function ($id) {
    $issue = App\Issue::find($id);

    return view('issue', compact('issue'));
});

Route::post('/comment', function(){
    $comment = new App\Comment();

    $comment->content = Request::get('content');

    $comment->issue_id = Request::get('issue_id');

    $comment->save();

    return redirect()->back();
});

Route::post('/close-issue', function(){
    $issue = App\Issue::find(Request::get('issue_id'));

    $issue->status = App\Issue::CLOSED_STATUS;

    $issue->save();

    return redirect()->back();
});

Route::post('/open-issue', function(){
    $issue = App\Issue::find(Request::get('issue_id'));

    $issue->status = App\Issue::OPEN_STATUS;

    $issue->save();

    return redirect()->back();
});
