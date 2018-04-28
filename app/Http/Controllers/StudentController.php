<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

// Models...
use App\Student;

class StudentController extends Controller
{
    public function indexall()
    {
        return view('student.allindex');
    }

    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }

    public function firstyearfirstsemester()
    {
        $students = Student::all();

        return view('student.firstyearfirstsemester', compact('students'));
    }

    public function firstyearsecondsemester()
    {
        $students = Student::all();

        return view('student.firstyearsecondsemester', compact('students'));
    }
    public function secondyearfirstsemester()
    {
        $students = Student::all();

        return view('student.secondyearfirstsemester', compact('students'));
    }

    public function secondyearsecondsemester()
    {
        $students = Student::all();

        return view('student.secondyearsecondsemester', compact('students'));
    }

    public function thirdyearfirstsemester()
    {
        $students = Student::all();

        return view('student.thirdyearfirstsemester', compact('students'));
    }

    public function thirdyearsecondsemester()
    {
        $students = Student::all();

        return view('student.thirdyearsecondsemester', compact('students'));
    }

    public function fourthyearfirstsemester()
    {
        $students = Student::all();

        return view('student.fourthyearfirstsemester', compact('students'));
    }

    public function fourthyearsecondsemester()
    {
        $students = Student::all();

        return view('student.fourthyearsecondsemester', compact('students'));
    }



    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'student_id' => 'required',
            'dept'       => 'required',
            'year'       => 'required',
            'semester'   => 'required',
            'session'    => 'required',
            'address'    => 'required',
            'email'      => 'required|email|unique:students',
            'contact'    => 'required|min:11|max:11',
            'image'      => 'required'
        ]);

        $data = $request->all();

        // Image Upload...
        if($request->file('image'))
        {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();

            $token = sha1(time());

            $prefix = 'student';

            $name = $prefix.'_'.$token.'.'.$ext;

            $path = 'uploads/student';

            $file->move($path, $name);      

            $image = $name;
        }
        else
        {
            $image = 'student.jpg';
        }

        $student = new Student;

        $student->first_name = $data['first_name'];
        $student->last_name  = $data['last_name'];
        $student->student_id = $data['student_id'];
        $student->dept       = $data['dept'];
        $student->year       = $data['year'];
        $student->semester   = $data['semester'];
        $student->session    = $data['session'];
        $student->address    = $data['address'];
        $student->email      = $data['email'];
        $student->contact    = $data['contact'];
        $student->image      = $image;
        $student->created_by = 1;
        $student->updated_by = 1;

        if ($student->save()) 
        {
            return redirect()
                   ->route('admin_student_indexall')
                   ->with('status', 'success')
                   ->with('message', 'Student Added Successfully!');
        }

        else
        {
            return redirect()
                   ->route('admin_student_create')
                   ->with('status', 'danger')
                   ->with('message', 'Student can not be added!!');
        }

    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show',compact('student','id'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit',compact('student','id'));
    }

    public function update(Request $request, $id)
    {


         $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'student_id' => 'required',
            'dept'       => 'required',
             'year'      => 'required',
             'semester'  => 'required',
            'session'    => 'required',
            'address'    => 'required',
            'email'      => 'required',
            'contact'    => 'required',
            'image'      => 'required'
        ]);

        $data = $request->all();


        // Image Upload...
        if($request->file('image'))
        {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();

            $token = sha1(time());

            $prefix = 'student';

            $name = $prefix.'_'.$token.'.'.$ext;

            $path = 'uploads/student';

            $file->move($path, $name);      

            $image = $name;
        }
        else
        {
            $image = 'student.jpg';
        }

        $student = Student::find($id);

        $student->first_name = $data['first_name'];
        $student->last_name  = $data['last_name'];
        $student->student_id = $data['student_id'];
        $student->dept       = $data['dept'];
        $student->year       = $data['year'];
        $student->semester   = $data['semester'];
        $student->session    = $data['session'];
        $student->address    = $data['address'];
        $student->email      = $data['email'];
        $student->contact    = $data['contact'];
        $student->image      = $image;
        $student->created_by = 1;
        $student->updated_by = 1;

        if ($student->update()) 
        {
            return redirect()
                   ->route('admin_student_indexall')
                   ->with('status', 'success')
                   ->with('message', 'Student Updated Successfully!');
        }

        else
        {
            return redirect()
                   ->route('admin_student_edit')
                   ->with('status', 'danger')
                   ->with('message', 'Student can not be edited!!');
        }

    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student->delete()) 
        {
            $path = "uploads/student";
            $image = $student->image;

            $deletable = $path."/".$image;

            if(File::exists($deletable))
            {
                File::delete($deletable);

                return redirect()
                   ->route('admin_student_indexall')
                   ->with('status', 'success')
                   ->with('message', 'Student Deleted Successfully!');
            }
            
            
        }
    }
}
