<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['first_name','last_name','student_id','dept','year','semester','session','address','email','contact'];
}
