@extends('layouts.admin2')

@section('title', 'Course list')

@section('content')

    <div class="card">
        <div class="card-header">

            <div class="card-actions">

            </div>
        </div>

        <div class="card-block">
            <div class="form-group col-md-6" style="height: 450px;">

                <div>
                    <h1 style="margin-left: 220px;">All Courses</h1>
                </div><br>
                <div style="float: right;">
                    <a href="{{ route('course_one_one') }}"><input style="width: 320px;" class="buttonmain button1" type="submit" value="1st Year 1st semester courses"></a><br><br>
                    <a href="{{ route('course_one_two') }}"><input class="buttonmain button2" style="width: 320px;" type="submit" value="1st Year 2nd semester courses"></a><br><br>
                    <a href="{{ route('course_two_one') }}"><input class="buttonmain button3" style="width: 320px;" value="2nd Year 1st semester courses" type="submit"></a><br><br>
                    <a href="{{ route('course_two_two') }}"><input class="buttonmain button4" style="width: 320px;" value="2nd Year 2nd semester courses" type="submit"></a><br><br>
                    <a href="{{ route('course_three_one') }}"><input style="width: 320px;" class="buttonmain button5" type="submit" value="3rd Year 1st semester courses"></a><br><br>
                    <a href="{{ route('course_three_two') }}"><input style="width: 320px;" class="buttonmain button6" type="submit" value="3rd Year 2nd semester courses"></a><br><br>
                    <a href="{{ route('course_four_one') }}"><input class="buttonmain button7" style="width: 320px;" value="4th Year 1st semester courses" type="submit"></a><br><br>
                    <a href="{{ route('course_four_two') }}"><input class="buttonmain button8" style="width: 320px;" value="4th Year 2nd semester courses" type="submit"></a>
                </div>

            </div>

        </div>
@endsection
