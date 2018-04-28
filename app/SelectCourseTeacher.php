<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectCourseTeacher extends Model
{

    protected $table = 'select_course_teachers';

    protected $fillable = ['teacher_id','course_id'];


}