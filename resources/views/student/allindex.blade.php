@extends('layouts.admin2')

@section('title', 'Student List')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">

            <div class="card-actions">

            </div>
        </div>

        <div class="card-block">
            <div class="form-group col-md-6" style="height: 450px;">
                @if(Auth::check())
                    @if(Auth::user()->role == '1')

                        <a href="{{ route('admin_student_create') }}"><input style="margin-top: 50px; width: 200px;" type="submit" class="btn btn-primary" name="signup" value="Create Student"></a>
                      
                        <img style="margin-bottom: 40px; z-index: 1;" src="../../uploads/createstudent.png" height="60px" width="180px">
                    
                    @else
                        <button class="btn btn-primary" disabled="disabled"><a  href="{{ route('admin_student_create') }}">
                            </a>Create Student</button>
                    @endif

                @endif

                <div>
                    <h1 style="margin-left: 220px;">All Students</h1>
                </div><br>
                    <div style="float: right;">
                    <a href="{{ route('admin_student_one_one') }}"><input style="width: 320px;" class="buttonmain button1" type="submit" value="1st Year 1st semester"></a><br><br>
                    <a href="{{ route('admin_student_one_two') }}"><input class="buttonmain button2" style="width: 320px;" type="submit" value="1st Year 2nd semester"></a><br><br>
                    <a href="{{ route('admin_student_two_one') }}"><input class="buttonmain button3" style="width: 320px;" value="2nd Year 1st semester" type="submit"></a><br><br>
                    <a href="{{ route('admin_student_two_two') }}"><input class="buttonmain button4" style="width: 320px;" value="2nd Year 2nd semester" type="submit"></a><br><br>
                    <a href="{{ route('admin_student_three_one') }}"><input style="width: 320px;" class="buttonmain button5" type="submit" value="3rd Year 1st semester"></a><br><br>
                    <a href="{{ route('admin_student_three_two') }}"><input style="width: 320px;" class="buttonmain button6" type="submit" value="3rd Year 2nd semester"></a><br><br>
                    <a href="{{ route('admin_student_four_one') }}"><input class="buttonmain button7" style="width: 320px;" value="4th Year 1st semester" type="submit"></a><br><br>
                    <a href="{{ route('admin_student_four_two') }}"><input class="buttonmain button8" style="width: 320px;" value="4th Year 2nd semester" type="submit"></a>
                    </div>


            </div>


        </div>
@endsection
