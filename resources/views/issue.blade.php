@extends('layout')

@section('head')



<style>

</style>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <a href='/project/{{$issue->project->id}}'>« Back To Dashboard: {{$issue->project->name}}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="main-title">
                            {{$issue->title}}
                        </h2>
                    </div>
                    <div class="col-md-2">
                        <div style="margin-top: 25px;">
                            @if($issue->status == App\Issue::OPEN_STATUS)
                            <span class="label label-success _size-20">Open</span>
                            @endif
                            @if($issue->status == App\Issue::CLOSED_STATUS)
                            <span class="label label-default _size-20">Closed</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach($issue->comments as $comment)
                <div class="issue-box" style="margin-bottom: 20px;">
                    <div>
                        {!!nl2br(htmlspecialchars($comment->content))!!}
                    </div>
                </div>
                @endforeach

                <div class="issue-box">

                    <form method="post" action="/comment" style="margin: 0;">
                        <textarea placeholder="Comment..." class="form-control" style='height: 200px; margin-bottom: 15px;' name='content' required></textarea>
                        <input type="hidden" name='issue_id' value='{{$issue->id}}'>
                        {{csrf_field()}}
                        <input type='submit' value='Comment' class="btn btn-primary btn-lg btn-block" onclick="this.disabled=true; this.value='處理中，請稍候...'; this.form.submit();">
                    </form>

                </div>


            </div>
            <div class="col-md-4">
                @if($issue->status == App\Issue::OPEN_STATUS)
                <form method="post" action="/close-issue" style="margin: 0;">
                    <input type="hidden" name='issue_id' value='{{$issue->id}}'>
                    {{csrf_field()}}
                    <input type='submit' class="btn btn-default btn-block _size-20" value="Close Issue">
                </form>
                @endif
                @if($issue->status == App\Issue::CLOSED_STATUS)
                <form method="post" action="/open-issue" style="margin: 0;">
                    <input type="hidden" name='issue_id' value='{{$issue->id}}'>
                    {{csrf_field()}}
                    <input type='submit' class="btn btn-default btn-block _size-20" value="Open Issue">
                </form>
                @endif
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
