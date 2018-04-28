@extends('layouts.admin')

@section('title', 'Edit Teacher')

@section('content')
{{ Form::open(['url' => route('admin_teacher_update', ['id' => $id]), 'method' => 'post','files' => 'true']) }}
<div class="col-md-12">
@if(Session::has('message'))
<div class="alert alert-{{ session('status') }}">
    {{ session('message') }}
</div>
@endif
<div class="card">

<div class="card-header">
    <span style="margin-left: 260px; font-size: 20px;"><strong>Edit Your Details</strong></span>
</div>
<div class="card-block">
    <form action="" method="post" class="form-horizontal ">
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-email" style="text-align: right;">First Name</label>
            <div class="col-md-9">
                <input type="text" id="hf-email" name="first_name" class="form-control" value="{{$teacher->first_name}}">
                @if($errors->has('first_name'))
                    <p class="text-danger">{{ $errors->first('first_name') }}</p>
                @endif
             
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Last Name</label>
            <div class="col-md-9">
                <input type="text" id="hf-password" name="last_name" class="form-control" value="{{$teacher->last_name}}">
                    @if($errors->has('last_name'))
                    <p class="text-danger">{{ $errors->first('last_name') }}</p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Department</label>
            <div class="col-md-9">
                <input type="text" id="hf-password" name="dept" class="form-control" value="{{$teacher->dept}}">
                 @if($errors->has('dept'))
                    <p class="text-danger">{{ $errors->first('dept') }}</p>
                @endif
               
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Designation</label>
            <div class="col-md-9">
                <input type="text" id="hf-password" name="designation" class="form-control" value="{{$teacher->designation}}">
                @if($errors->has('designation'))
                    <p class="text-danger">{{ $errors->first('designation') }}</p>
                @endif

            </div>
        </div>


        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Age</label>
            <div class="col-md-9">
                <input type="text" id="hf-password" name="age" class="form-control" value="{{$teacher->age}}">
              @if($errors->has('age'))
                    <p class="text-danger">{{ $errors->first('age') }}</p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Email</label>
            <div class="col-md-9">
                <input type="email" id="hf-password" name="email" class="form-control" value="{{$teacher->email}}">
                 @if($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Address</label>
            <div class="col-md-9">
                <input type="text" id="hf-password" name="address" class="form-control" value="{{$teacher->address}}">
                 @if($errors->has('address'))
                    <p class="text-danger">{{ $errors->first('address') }}</p>
                @endif 
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Contact No</label>
            <div class="col-md-9">
                <input type="text" id="hf-password" name="contact" class="form-control" value="{{$teacher->contact}}">
                 @if($errors->has('contact'))
                    <p class="text-danger">{{ $errors->first('contact') }}</p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Image</label>
            <div class="col-md-9">
                <input type="file" id="hf-password" name="image" class="form-control" value="">
                  <div class="col-md-9">
                        <span><img src="{{ url('uploads/teacher/'.$teacher->image)}}" style="height: 150px; width: 200px;"></span>
                    </div>  
                @if($errors->has('image'))
                    <p class="text-danger">{{ $errors->first('image') }}</p>
                @endif
            </div>
        </div>
    </form>
</div>
<div class="card-footer">
    <input type="submit" class="btn btn-sm btn-warning" value="update" style="margin-left: 430px;">
</div>

</div>
</div>
{{ Form::close() }}
@endsection