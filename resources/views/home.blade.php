@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                <div class="alert alert-success" style="text-align: center;">
   You already have registered
</div>
<div class="alert alert-info" style="text-align: center;">
  <strong>You can go the index page here <br><br><a href="{{ route('admin_student_index') }}"><button type="button" class="btn btn-primary">Index page</button></a></strong> 
</div>

       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
