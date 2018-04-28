@extends('layouts.admin')

@section('title', 'Create Student')

@section('content')

<div class="col-md-12">
	@if(Session::has('message'))
		<div class="alert alert-{{ session('status') }}">
		 	{{ session('message') }}
		</div>
	@endif
    <div class="card">
    	<form action="{{ route('admin_student_store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <div class="card-header">
	            <span style="margin-left: 260px; font-size: 20px;"><strong>Student Form</strong></span>
	        </div>
	        <div class="card-block">
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-email" style="text-align: right;">First Name</label>
	                <div class="col-md-9">
	                    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name.." value="{{ old('first_name') }}">
	                 	@if($errors->has('first_name'))
	                 		<p class="text-danger">{{ $errors->first('first_name') }}</p>
	                 	@endif
	                </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Last Name</label>
	                <div class="col-md-9">
	                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name.." value="{{ old('last_name') }}">
	                   	@if($errors->has('last_name'))
	                 		<p class="text-danger">{{ $errors->first('last_name') }}</p>
	                 	@endif
	                </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Student Id</label>
	                <div class="col-md-9">
	                    <input type="text" name="student_id" class="form-control" placeholder="Enter Id.." value="{{ old('student_id') }}">
	                    @if($errors->has('student_id'))
	                 		<p class="text-danger">{{ $errors->first('student_id') }}</p>
	                 	@endif
	                </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Department</label>
	                <div class="col-md-9">
	                    <input type="text" name="dept" class="form-control" placeholder="Enter Dept.." value="{{ old('dept') }}">
	                    @if($errors->has('dept'))
	                 		<p class="text-danger">{{ $errors->first('dept') }}</p>
	                 	@endif
	                </div>
	            </div>
				<div class="form-group row">
					<label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Year</label>
					<div class="col-md-9">
						<input type="text" name="year" class="form-control" placeholder="Enter Year.." value="{{ old('year') }}">
						@if($errors->has('year'))
							<p class="text-danger">{{ $errors->first('year') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Semester</label>
					<div class="col-md-9">
						<input type="text" name="semester" class="form-control" placeholder="Enter Semester.." value="{{ old('semester') }}">
						@if($errors->has('semester'))
							<p class="text-danger">{{ $errors->first('semester') }}</p>
						@endif
					</div>
				</div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Session</label>
	                <div class="col-md-9">
	                    <input type="text" name="session" class="form-control" placeholder="Enter Session.." value="{{ old('session') }}">
	                    @if($errors->has('session'))
	                 		<p class="text-danger">{{ $errors->first('session') }}</p>
	                 	@endif
	                </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Address</label>
	                <div class="col-md-9">
	                    <input type="text" name="address" class="form-control" placeholder="Enter Address.." value="{{ old('address') }}">
	                    @if($errors->has('address'))
	                 		<p class="text-danger">{{ $errors->first('address') }}</p>
	                 	@endif                                            
	                 </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Email</label>
	                <div class="col-md-9">
	                    <input type="email" name="email" class="form-control" placeholder="Enter Email.." value="{{ old('email') }}">
	                    @if($errors->has('email'))
	                 		<p class="text-danger">{{ $errors->first('email') }}</p>
	                 	@endif
	                </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Contact No</label>
	                <div class="col-md-9">
	                    <input type="text" name="contact" class="form-control" placeholder="Enter Contact No.." value="{{ old('contact') }}">
	                    @if($errors->has('contact'))
	                 		<p class="text-danger">{{ $errors->first('contact') }}</p>
	                 	@endif
	                </div>
	            </div>
	            <div class="form-group row">
	                <label class="col-md-3 form-control-label" for="hf-password" style="text-align: right;">Image</label>
	                <div class="col-md-9">
	                    <input type="file" name="image" class="form-control">
	                    @if($errors->has('image'))
	                 		<p class="text-danger">{{ $errors->first('image') }}</p>
	                 	@endif
	                </div>
	            </div>
	        </div>
	        <div class="card-footer">
	            <input type="submit" class="btn btn-sm btn-success" value="submit" style="margin-left: 260px;">
	            <a class="btn btn-sm btn-danger" href="{{ route('admin_student_indexall') }}">Cancel</a>
	        </div>
	    </form>
	</div>
</div>
@endsection