<?php

namespace App\Http\Controllers;

use App\CourseTeacher;
use App\SelectCourseTeacher;
use Illuminate\Http\Request;
use App\Course;
use DB;
use Auth;

class RoutineController extends Controller
{

    public function courses()
    {
        $one_one_courses =  DB::table('courses')
            ->whereBetween('id', [1,7])->get();

        $one_two_courses =  DB::table('courses')
            ->whereBetween('id', [8,15])->get();

        return view('routine.selectcourse',compact("one_one_courses"),compact("one_two_courses"));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input('one_one_courses');
        $data2 = $request->input('one_two_courses');
        $teacher_name = Auth::user()->name;
        $teacher_lastname = Auth::user()->lastname;

        $teacher = $teacher_name." ".$teacher_lastname;

        $teacher_row = CourseTeacher::select('*')->whereTeacherName($teacher)->first();

        //return $teacher_row->id;

        $data3 = array_merge($data,$data2);
        $count = sizeof($data3);
        $dataArray = [];

        for($i=0; $i<$count; $i++){
            $dataArray[]=[
                'course_id' => $data3[$i],
                'teacher_id' => $teacher_row->id,
            ];
        }

        if(DB::table('select_course_teachers')->insert($dataArray)){

            return redirect()
                ->route('selecttimeandroom');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add()
    {

        $teacher_name = Auth::user()->name;
        $teacher_lastname = Auth::user()->lastname;


        $teacher = $teacher_name." ".$teacher_lastname;


        $teacher_row = CourseTeacher::select('*')->whereTeacherName($teacher)->first();


        $course_id =  DB::table('select_course_teachers')->select('course_id')->whereTeacherId($teacher_row->id)->get();


        $idArray =[];
        $idName = [];

        foreach ($course_id as $courseid ){

            $idArray[] = $courseid;
        }


        foreach($idArray as  $csid ) {
            foreach ($csid as $cid) {

                $coursename = DB::table('courses')->select('course_name')->whereId($cid)->get();
                $idName[] = $coursename;

            }
        }



        //return $idName;



        //return dd($idArray);

        //$course_name = DB::table('courses')->select('course_name')->whereId($course_id)->get();

        //foreach ($course_id as $cid)

       return view('routine.selecttimeandroom',compact('idName'));

       // return view('routine.selectedcourse');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getTimeAndRoom(Request $request)
    {
        $start_timeSat = $request->input('start_timesat');
        $end_timeSat = $request->input('end_timesat');
        $start_timeSun = $request->input('start_timesun');
        $end_timeSun = $request->input('end_timesun');
        $start_timeMon = $request->input('start_timemon');
        $end_timeMon = $request->input('end_timemon');
        $start_timeTue = $request->input('start_timetue');
        $end_timeTue = $request->input('end_timetue');
        $start_timeWed = $request->input('start_timewed');
        $end_timeWed = $request->input('end_timewed');
        $room_typeSat = $request->input('room_typesat');
        $room_noSat = $request->input('room_nosat');
        $room_typeSun = $request->input('room_typesun');
        $room_noSun = $request->input('room_nosun');
        $room_typeMon = $request->input('room_typemon');
        $room_noMon = $request->input('room_nomon');
        $room_typeTue = $request->input('room_typetue');
        $room_noTue = $request->input('room_notue');
        $room_typeWed = $request->input('room_typewed');
        $room_noWed = $request->input('room_nowed');
        $day_sat = $request->input('daysat');
        $day_sun = $request->input('daysun');
        $day_mon = $request->input('daymon');
        $day_tue = $request->input('daytue');
        $day_wed = $request->input('daywed');


        $day = [];

        if(sizeof($day_sat)>0)
            $day = $day_sat;
        if(sizeof($day_sun)>0)
            $day = array_merge($day,$day_sun);
        if(sizeof($day_mon)>0)
            $day = array_merge($day,$day_mon);
        if(sizeof($day_tue)>0)
            $day = array_merge($day,$day_tue);
        if(sizeof($day_wed)>0)
            $day = array_merge($day,$day_wed);



        //return $day;

        $start_time = [];


        if(sizeof($start_timeSat)>0)
             $start_time = $start_timeSat;
        if(sizeof($start_timeSun)>0)
             $start_time = array_merge($start_time,$start_timeSun);
        if(sizeof($start_timeMon)>0)
             $start_time = array_merge($start_time,$start_timeMon);
        if(sizeof($start_timeTue)>0)
             $start_time = array_merge($start_time,$start_timeTue);
        if(sizeof($start_timeWed)>0)
             $start_time = array_merge($start_time,$start_timeWed);



        $end_time = [];


        if(sizeof($end_timeSat)>0)
            $end_time = $end_timeSat;
        if(sizeof($end_timeSun)>0)
            $end_time = array_merge($end_time,$end_timeSun);
        if(sizeof($end_timeMon)>0)
            $end_time = array_merge($end_time,$end_timeMon);
        if(sizeof($end_timeTue)>0)
            $end_time = array_merge($end_time,$end_timeTue);
        if(sizeof($end_timeWed)>0)
            $end_time = array_merge($end_time,$end_timeWed);


        $room_type = [];

        if(sizeof($room_typeSat)>0)
            $room_type = $room_typeSat;
        if(sizeof($room_typeSun)>0)
            $room_type = array_merge($room_type,$room_typeSun);
        if(sizeof($room_typeMon)>0)
            $room_type = array_merge($room_type,$room_typeMon);
        if(sizeof($room_typeTue)>0)
            $room_type = array_merge($room_type,$room_typeTue);
        if(sizeof($room_typeWed)>0)
            $room_type = array_merge($room_type,$room_typeWed);

        $room_no = [];

        if(sizeof($room_noSat)>0)
            $room_no = $room_noSat;
        if(sizeof($room_noSun)>0)
            $room_no = array_merge($room_no,$room_noSun);
        if(sizeof($room_noMon)>0)
            $room_no = array_merge($room_no,$room_noMon);
        if(sizeof($room_noTue)>0)
            $room_no = array_merge($room_no,$room_noTue);
        if(sizeof($room_noWed)>0)
            $room_no = array_merge($room_no,$room_noWed);






        $teacher_name = Auth::user()->name;
        $teacher_lastname = Auth::user()->lastname;

        $teacher = $teacher_name." ".$teacher_lastname;

        $teacher_id = CourseTeacher::select('id')->whereTeacherName($teacher)->first();


     $count = sizeof($start_time);
     $validcount = 0;

//     for($j=0; $j<$count; $j++){
//
//         if($start_time[$j] == null)
//             continue;
//         else
//             $validcount++;
//
//
//     }

     //return $validcount;








        //$valid_day_difference = $validcount/sizeof($day);

        //return $valid_day_difference;








        for($i=0; $i<$count; $i++){

            if($start_time[$i] == null)
                break;

            $TimeArray[]=[
                'start_time' => $start_time[$i],
                'end_time' => $end_time[$i],
                'teacher_id' => $teacher_id->id,
                'course_id' => 1,
                'day' => 'Saturday',
            ];
        }

//        for($i=0; $i<$valid_day_difference; $i++){
//
//            for($j=0; $j<$valid_day_difference; $j++) {
//
//                $TimeArray[] = [
//                    'day' => $d[$i],
//                ];
//
//            }
//        }
//
//        return $TimeArray;


        for($i=0; $i<$count; $i++){

            if($start_time[$i] == null)
                break;

            $RoomArray[]=[
                'room_type' => $room_type[$i],
                'room_no' => $room_no[$i],
            ];
        }






        if(DB::table('times')->insert($TimeArray)){

        if(DB::table('rooms')->insert($RoomArray)){




            return "success";
        }




        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
