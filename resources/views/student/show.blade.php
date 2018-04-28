@extends('layouts.admin')

@section('title', 'Student Details')

@section('content')

<div class="col-md-12" style="font-size: 20px;">
    <div class="card">
        <div class="card-header">
            <span style="margin-left: 260px; font-size: 20px;"><strong>Student's Info</strong></span>
        </div>
        <div class="card-block">
            <form action="" method="post" class="form-horizontal ">
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email" style="text-align: right;">First Name</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->first_name}}</span>
                     
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Last Name</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->last_name}}</span>
                       
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Student Id</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->student_id}}</span>
                       
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Department</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->dept}}</span>
                      
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Session</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->session}}</span>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Address</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->address}}</span>
                                                                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Email</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>    {{$student->email}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Contact No</label>
                    <div class="col-md-9">
                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i>     {{$student->contact}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Image</label>
                    <div class="col-md-9">
                        <span><img src="{{ url('uploads/student/'.$student->image)}}" style="height: 150px; width: 200px;"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
        </div>
</div>


@endsection