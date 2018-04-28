<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    protected $table = "course_teachers";
    protected $fillable = ['teacher_name','nickname'];

}
