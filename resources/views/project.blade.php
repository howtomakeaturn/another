@extends('layout')

@section('head')



<style>
    .issue-box.-closed {
        background-color: #F5F5F5;
    }
    ._margin-bottom-5 {
        margin-bottom: 5px;
    }
</style>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-title"><a href='/project/{{$project->id}}'>{{$project->name}}</a></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="issues-box">
                    @foreach($project->issues as $issue)
                    @if($issue->status == 0)
                    <div class="issue-box">
                    @endif
                    @if($issue->status == -10)
                    <div class="issue-box -closed">
                    @endif
                        <div class="row">
                            <div class="col-md-9">
                                <div class="_margin-bottom-5"><a href='/issue/{{$issue->id}}' style="display: block;">{{$issue->title}}</a></div>
                                <?php Carbon\Carbon::setLocale('zh-TW'); ?>
                                <div class="-subinfo">{{$issue->created_at->diffForHumans()}}</div>
                            </div>
                            <div class="col-md-1">
                                @if($issue->comments->count() - 1 > 0)
                                <i class="fa fa-comment-o" aria-hidden="true"></i> {{$issue->comments->count() - 1}}
                                @endif
                            </div>
                            <div class="col-md-2">
                                @if($issue->status == 0)
                                <span class="label label-success _size-20">Open</span>
                                @endif
                                @if($issue->status == -10)
                                <span class="label label-default _size-20">Closed</span>
                                @endif

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <a class="btn btn-primary btn-block _size-20" href='/project/{{$project->id}}/new-issue'>New Issue</a>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
