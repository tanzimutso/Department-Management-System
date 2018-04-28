@extends('layouts.admin')

@section('title', 'Edit Student')

@section('content')
{{ Form::open(['url' => route('admin_student_update', ['id' => $id]), 'method' => 'post','files' => 'true']) }}

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
                        <input type="text" id="hf-email" name="first_name" class="form-control" value="{{$student->first_name}}">
                        @if($errors->has('first_name'))
                            <p class="text-danger">{{ $errors->first('first_name') }}</p>
                        @endif

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="last_name" class="form-control" value="{{$student->last_name}}">
                            @if($errors->has('last_name'))
                            <p class="text-danger">{{ $errors->first('last_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Student Id</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="student_id" class="form-control" value="{{$student->student_id}}">
                         @if($errors->has('student_id'))
                            <p class="text-danger">{{ $errors->first('student_id') }}</p>
                        @endif

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Department</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="dept" class="form-control" value="{{$student->dept}}">
                      @if($errors->has('dept'))
                            <p class="text-danger">{{ $errors->first('dept') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Year</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="year" class="form-control" value="{{$student->year}}">
                        @if($errors->has('year'))
                            <p class="text-danger">{{ $errors->first("year") }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Semester</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="semester" class="form-control" value="{{$student->semester}}">
                        @if($errors->has('semester'))
                            <p class="text-danger">{{ $errors->first('semester') }}</p>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Session</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="session" class="form-control" value="{{$student->session}}">
                         @if($errors->has('session'))
                            <p class="text-danger">{{ $errors->first('session') }}</p>
                        @endif

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Address</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="address" class="form-control" value="{{$student->address}}">
                         @if($errors->has('address'))
                            <p class="text-danger">{{ $errors->first('address') }}</p>
                        @endif
                                                                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="hf-password" name="email" class="form-control" value="{{$student->email}}">
                        @if($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Contact No</label>
                    <div class="col-md-9">
                        <input type="text" id="hf-password" name="contact" class="form-control" value="{{$student->contact}}">
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
                                <span><img src="{{ url('uploads/student/'.$student->image)}}" style="height: 150px; width: 200px;"></span>
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