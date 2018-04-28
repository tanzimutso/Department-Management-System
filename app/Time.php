<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'times';

    protected $fillable = ['start_time','end_time','teacher_id','course_id','day'];
}
