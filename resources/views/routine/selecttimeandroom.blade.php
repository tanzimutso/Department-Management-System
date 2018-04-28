@extends('layouts.admin2')

@section('title', 'Student List')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('selectedtimeandroom') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-md-12" id="year">

            <h2>{{ Auth::user()->name." ".Auth::user()->lastname}} has registered for {{ sizeof($idName) }} courses:</h2><br><br>


            </div><br>


            <div id="timetablesat">

                <div  class="form-group">
                    <label for="role" class="col-md-4 control-label">Select Day</label>

                    <div class="col-md-6">
                        <select class="form-control" class="Day" name="daysat[]">
                            <option value="" selected disabled hidden>Choose day</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                        </select>

                    </div>
                </div>



                   @foreach($idName as $coname)
                   @foreach( $coname as  $cname )
                   @foreach($cname as $course_name)

                   <div class="col-md-6">
           <ul>

               <li>{{ $course_name }}</li><br>Select Start time: <input type="number" min="1" max="12"  name="start_timesat[]">
               Select End time: <input type="number" min="1" max="12" name="end_timesat[]">
           </ul>

               </div>

               <div class="col-md-4 pull-right" style="margin-top: -75px; margin-right: 160px;">
                   <label for="role">Select Room-Type</label>
                   <select class="form-control" id="room-type" name="room_typesat[]">
                       <option value="" selected disabled hidden>Choose here</option>
                       <option value="classroom">Classroom</option>
                       <option value="lab">Lab</option>
                       <option value="lab E">E-Lab</option>
                   </select>

               </div>


                        <div class="col-md-2 pull-right" style="margin-top: -75px; margin-right: 120px;">
                            <label for="role">Select Room-No</label>
                            <select class="form-control" id="room-no" name="room_nosat[]">
                                <option value="" selected disabled hidden>Choose here</option>
                                <option value="214">214</option>
                                <option value="215">215</option>
                                <option value="216">216</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>

                        </div><br>


                   @endforeach
                   @endforeach
                   @endforeach

        </div>

            <div id="timetablesun">

                <div  class="form-group">
                    <label for="role" class="col-md-4 control-label">Select Day</label>

                    <div class="col-md-6">
                        <select class="form-control" class="Day" name="daysun[]">
                            <option value="" selected disabled hidden>Choose day</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                        </select>

                    </div>
                    </div>


                @foreach($idName as $coname)
                    @foreach( $coname as  $cname )
                        @foreach($cname as $course_name)

                            <div class="col-md-6">
                                <ul>

                                    <li>{{ $course_name }}</li><br>Select Start time: <input type="number" min="1" max="12"  name="start_timesun[]">
                                    Select End time: <input type="number" min="1" max="12" name="end_timesun[]">
                                </ul>

                            </div>

                            <div class="col-md-4 pull-right" style="margin-top: -75px; margin-right: 160px;">
                                <label for="role">Select Room-Type</label>
                                <select class="form-control" id="room-type" name="room_typesun[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="classroom">Classroom</option>
                                    <option value="lab">Lab</option>
                                    <option value="lab E">E-Lab</option>
                                </select>

                            </div>


                            <div class="col-md-2 pull-right" style="margin-top: -75px; margin-right: 120px;">
                                <label for="role">Select Room-No</label>
                                <select class="form-control" id="room-no" name="room_nosun[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="214">214</option>
                                    <option value="215">215</option>
                                    <option value="216">216</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div><br>


                        @endforeach
                    @endforeach
                @endforeach

            </div>

            <div id="timetablemon">

                <div  class="form-group">
                    <label for="role" class="col-md-4 control-label">Select Day</label>

                    <div class="col-md-6">
                        <select class="form-control" class="Day" name="daymon[]">
                            <option value="" selected disabled hidden>Choose day</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                        </select>

                    </div>
                </div>

                @foreach($idName as $coname)
                    @foreach( $coname as  $cname )
                        @foreach($cname as $course_name)

                            <div class="col-md-6">
                                <ul>

                                    <li>{{ $course_name }}</li><br>Select Start time: <input type="number" min="1" max="12"  name="start_timemon[]">
                                    Select End time: <input type="number" min="1" max="12" name="end_timemon[]">
                                </ul>

                            </div>

                            <div class="col-md-4 pull-right" style="margin-top: -75px; margin-right: 160px;">
                                <label for="role">Select Room-Type</label>
                                <select class="form-control" id="room-type" name="room_typemon[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="classroom">Classroom</option>
                                    <option value="lab">Lab</option>
                                    <option value="lab E">E-Lab</option>
                                </select>

                            </div>


                            <div class="col-md-2 pull-right" style="margin-top: -75px; margin-right: 120px;">
                                <label for="role">Select Room-No</label>
                                <select class="form-control" id="room-no" name="room_nomon[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="214">214</option>
                                    <option value="215">215</option>
                                    <option value="216">216</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div><br>


                        @endforeach
                    @endforeach
                @endforeach

            </div>

            <div id="timetabletue">

                <div  class="form-group">
                    <label for="role" class="col-md-4 control-label">Select Day</label>

                    <div class="col-md-6">
                        <select class="form-control" class="Day" name="daytue[]">
                            <option value="" selected disabled hidden>Choose day</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                        </select>

                    </div>
                </div>


                @foreach($idName as $coname)
                    @foreach( $coname as  $cname )
                        @foreach($cname as $course_name)

                            <div class="col-md-6">
                                <ul>

                                    <li>{{ $course_name }}</li><br>Select Start time: <input type="number" min="1" max="12"  name="start_timetue[]">
                                    Select End time: <input type="number" min="1" max="12" name="end_timetue[]">
                                </ul>

                            </div>

                            <div class="col-md-4 pull-right" style="margin-top: -75px; margin-right: 160px;">
                                <label for="role">Select Room-Type</label>
                                <select class="form-control" id="room-type" name="room_typetue[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="classroom">Classroom</option>
                                    <option value="lab">Lab</option>
                                    <option value="lab E">E-Lab</option>
                                </select>

                            </div>


                            <div class="col-md-2 pull-right" style="margin-top: -75px; margin-right: 120px;">
                                <label for="role">Select Room-No</label>
                                <select class="form-control" id="room-no" name="room_notue[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="214">214</option>
                                    <option value="215">215</option>
                                    <option value="216">216</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div><br>


                        @endforeach
                    @endforeach
                @endforeach

            </div>

            <div id="timetablewed">


                <div  class="form-group">
                    <label for="role" class="col-md-4 control-label">Select Day</label>

                    <div class="col-md-6">
                        <select class="form-control" class="Day" name="daywed[]">
                            <option value="" selected disabled hidden>Choose day</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                        </select>

                    </div>
                </div>

                @foreach($idName as $coname)
                    @foreach( $coname as  $cname )
                        @foreach($cname as $course_name)

                            <div class="col-md-6">
                                <ul>

                                    <li>{{ $course_name }}</li><br>Select Start time: <input type="number" min="1" max="12"  name="start_timewed[]">
                                    Select End time: <input type="number" min="1" max="12" name="end_timewed[]">
                                </ul>

                            </div>

                            <div class="col-md-4 pull-right" style="margin-top: -75px; margin-right: 160px;">
                                <label for="role">Select Room-Type</label>
                                <select class="form-control" id="room-type" name="room_typewed[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="classroom">Classroom</option>
                                    <option value="lab">Lab</option>
                                    <option value="lab E">E-Lab</option>
                                </select>

                            </div>


                            <div class="col-md-2 pull-right" style="margin-top: -75px; margin-right: 120px;">
                                <label for="role">Select Room-No</label>
                                <select class="form-control" id="room-no" name="room_nowed[]">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="214">214</option>
                                    <option value="215">215</option>
                                    <option value="216">216</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div><br>


                        @endforeach
                    @endforeach
                @endforeach

            </div>




    <div class="form-group">
        <div class="col-md-12 col-md-offset-4">
            <button type="submit" class="btn btn-warning" style="float: right; width: 20%;">
                Submit
            </button>
        </div>
    </div>
        </div>
    </form>



@endsection

@section('script')

    <script>

        $(function(){

//            $("#timetablesat").hide();
//            $("#timetablesun").hide();
//            $("#timetablemon").hide();
//            $("#timetabletue").hide();
//            $("#timetablewed").hide();

            $(".Day").change(function() {


                if($(".Day option:selected").text() == "Saturday"){

                    $("#timetablesat").show();
                }
                else
                    $("#timetablesat").hide();

                if($(".Day option:selected").text() == "Sunday") {

                    $("#timetablesun").show();
                }

                else
                    $("#timetablesun").hide();

                if($(".Day option:selected").text() == "Monday") {

                    $("#timetablemon").show();
                }

                else
                    $("#timetablemon").hide();

                if($(".Day option:selected").text() == "Tuesday") {

                    $("#timetabletue").show();
                }

                else
                    $("#timetabletue").hide();

                if($(".Day option:selected").text() == "Wednesday") {

                    $("#timetablewed").show();
                }

                else
                    $("#timetablewed").hide();

            });

        });

    </script>
@endsection