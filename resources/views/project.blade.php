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
                <h2 class="main-title">{{$project->name}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="issues-box">
                    @foreach($project->issues as $issue)
                    <div class="issue-box">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="_margin-bottom-5">{{$issue->title}}</div>
                                <div class="-subinfo">於 5 天前</div>
                            </div>
                            <div class="col-md-1">
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 5
                            </div>
                            <div class="col-md-2">
                                <span class="label label-success _size-20">Open</span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @for($i=0; $i<5; $i++)
                    <div class="issue-box">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="_margin-bottom-5">this is just another issue #{{$i}}</div>
                                <div class="-subinfo">#{{$i}} &nbsp;&nbsp; 於 {{$i}} 天前</div>
                            </div>
                            <div class="col-md-1">
                                <i class="fa fa-comment-o" aria-hidden="true"></i> {{$i}}
                            </div>
                            <div class="col-md-2">
                                <span class="label label-success _size-20">Open</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                    @for($i=0; $i<5; $i++)
                    <div class="issue-box -closed">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="_margin-bottom-5">this is just another issue #{{$i}}</div>
                                <div class="-subinfo">#{{$i}} &nbsp;&nbsp; 於 {{$i}} 天前</div>
                            </div>
                            <div class="col-md-1">
                                <i class="fa fa-comment-o" aria-hidden="true"></i> {{$i}}
                            </div>
                            <div class="col-md-2">
                                <span class="label label-default _size-20">Closed</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-4">
                <a class="btn btn-success btn-block _size-20" href='#'>New Issue</a>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
