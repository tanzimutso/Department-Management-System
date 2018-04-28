@extends('layouts.admin2')

@section('title', 'Student List')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('selectedcourse') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div  class="form-group">
        <label for="role" class="col-md-4 control-label">Select Year and Semester</label>

        <div class="col-md-6">
            <select class="form-control" id="batch">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="1">1st Year 1st Semester</option>
                <option value="2">1st Year 2nd Semester</option>
                <option value="3">2nd Year 1nd Semester</option>
                <option value="4">2nd Year 2nd Semester</option>
                <option value="5">3rd Year 1st Semester</option>
                <option value="6">3rd Year 2nd Semester</option>
                <option value="7">4th Year 1st Semester</option>
                <option value="8">4th Year 2nd Semester</option>
            </select>

        </div>
    </div>
        <div id="one_one" style="display: none;"><br>

            @foreach($one_one_courses as $one_one_course)
            <ul>

                <li>{{$one_one_course->course_name}}</li>
                <input  id="checkbox1" type="checkbox" name="one_one_courses[]" value="{{$one_one_course->id}}">
            </ul>
                @endforeach


        </div>

        <div id="one_two" style="display: none;"><br>
            @foreach($one_two_courses as $one_two_course)
                <ul>

                    <li>{{$one_two_course->course_name}}</li>
                    <input id="checkbox2" type="checkbox" name="one_two_courses[]" value="{{$one_two_course->id}}">
                </ul>
            @endforeach
        </div>



    <br>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </div>
    </div>
    </form>

    @endsection

@section('script')

    <script>

        $(function(){
            $("#batch").change(function() {


                if($("#batch option:selected").text() == "1st Year 1st Semester"){

                    $("#one_one").show();


                }

                else

                    $("#one_one").hide();

                if($("#batch option:selected").text() == "1st Year 2nd Semester") {

                    $("#one_two").show();
                }

                else
                    $("#one_two").hide();



            });

        });

    </script>
@endsection