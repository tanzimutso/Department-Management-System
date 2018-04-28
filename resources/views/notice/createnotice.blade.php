@extends('layouts.admin')

@section('title', 'Create Notice')

@section('content')

    <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <form action="{{ route('notice_store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-header">
                    <span style="margin-left: 260px; font-size: 20px;"><strong>Create New Notice</strong></span>
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-title" style="text-align: right;">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control" placeholder="Enter Title.." value="{{ old('title') }}">
                            @if($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Body</label>
                        <div class="col-md-9">
                            <input type="text" style="height: 120px; width: 440px;" name="body" class="form-control" placeholder="Enter Body.." value="{{ old('body') }}">
                            @if($errors->has('body'))
                                <p class="text-danger">{{ $errors->first('body') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Date</label>
                        <div class="col-md-9">
                            <input type="date" name="created_in" class="form-control" placeholder="Enter Date.." value="{{ old('created_in') }}">
                            @if($errors->has('created_in'))
                                <p class="text-danger">{{ $errors->first('created_in') }}</p>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-sm btn-success" value="submit" style="margin-left: 260px;">
                    <a class="btn btn-sm btn-danger" href="{{ route('allnotice') }}">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection