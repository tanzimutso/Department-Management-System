<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function allcourse()
    {
        return view('courses.allcourse');
    }


    public function oneone()
    {

        return view('courses.oneone');
    }

    public function onetwo()
    {

        return view('courses.onetwo');
    }

    public function twoone()
    {

        return view('courses.twoone');
    }

    public function twotwo()
    {

        return view('courses.twotwo');
    }

    public function threeone()
    {

        return view('courses.threeone');
    }

    public function threetwo()
    {

        return view('courses.threetwo');
    }

    public function fourone()
    {

        return view('courses.fourone');
    }

    public function fourtwo()
    {

        return view('courses.fourtwo');
    }



}
