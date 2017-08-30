@extends('layout')

@section('head')

<style>
    body {
        background-color: #EEEEEE   ;
        font-size: 16px;
    }
    .issues-box {
        background-color: white;
    }
    .issue-box {
        padding: 15px;
        border-bottom: 1px solid #E0E0E0;
    }
    .issue-box.-closed {
        background-color: #F5F5F5;
    }

    ._size-20 {
        font-size: 20px;
    }
</style>

@endsection

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="issues-box">
                    @for($i=0; $i<5; $i++)
                    <div class="issue-box">
                        <div class="row">
                            <div class="col-md-10">
                                101010
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
                            <div class="col-md-10">
                                101010
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
                <a class="btn btn-success btn-block" href='#'>New Issue</a>
            </div>
        </div>
    </div>
@endsection
