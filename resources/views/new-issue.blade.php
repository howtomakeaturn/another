@extends('layout')

@section('head')



<style>

</style>

@endsection

@section('content')

<div class='container'>

    <div class="row">
        <div class="col-md-12">
            <br>
            <a href='/project/{{$project->id}}'>« Back To Dashboard: {{$project->name}}</a>
        </div>
    </div>

    <div class='row'>
        <div class='col-md-8'>

            <h2 class="main-title">
                New Issue
            </h2>

            <div class="issue-box">

                <form method="post" action="/new-issue" style="margin: 0;">
                    <input type='text' placeholder="Title..." class="form-control" name='title' required>
                    <br>
                    <textarea placeholder="Content..." class="form-control" style='height: 400px;' name='content' required></textarea>
                    <br>
                    <input type="hidden" name='project_id' value='{{$project->id}}'>
                    {{csrf_field()}}
                    <input type='submit' value='Create' class="btn btn-primary btn-lg btn-block">
                </form>

            </div>

            <br>
            <br>

        </div>
    </div>
</div>

@endsection
