@extends('layouts.admin')

@section('title','Create Notice')

@section('content')

    {{ Form::open(['url' => route('notice_update', ['id' => $id]), 'method' => 'post']) }}
    <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <form action=" " method="post" class="form-horizontal">
                <div class="card-header">
                    <span style="margin-left: 260px; font-size: 20px;"><strong>Update Notice</strong></span>
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-title" style="text-align: right;">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control" placeholder="Enter Title.." value="{{ $notice->title }}">
                            @if($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-body" style="text-align: right;">Body</label>
                        <div class="col-md-9">
                            <input type="text" style="height: 120px; width: 440px;" name="body" class="form-control" placeholder="Enter Body.." value="{{ $notice->body }}">
                            @if($errors->has('body'))
                                <p class="text-danger">{{ $errors->first('body') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-date" style="text-align: right;">Date</label>
                        <div class="col-md-9">
                            <input type="date" name="created_in" class="form-control" placeholder="Enter Date.." value="{{ $notice->created_in }}">
                            @if($errors->has('created_in'))
                                <p class="text-danger">{{ $errors->first('created_in') }}</p>
                            @endif
                        </div>
                    </div>

                </div>

            </form>
        </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-sm btn-warning" value="update" style="margin-left: 430px;">
                <a class="btn btn-sm btn-danger" href="{{ route('allnotice') }}">Cancel</a>
            </div>
    </div>
    {{ Form::close() }}
    @endsection