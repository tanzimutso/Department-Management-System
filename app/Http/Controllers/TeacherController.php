<?php

namespace App\Http\Controllers;

use File;


use Illuminate\Http\Request;

use App\Teacher;

class TeacherController extends Controller
{
   
    public function index()
    {
        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('teacher.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'dept'       => 'required',
            'age'        => 'required',
            'email'      => 'required|email|unique:students',
            'address'    => 'required',
            'contact'    => 'required|min:11|max:11',
            'designation' => 'required',
            'image'      => 'required'

        ]);

        $data = $request->all();

        // Image Upload...
        if($request->file('image'))
        {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();

            $token = sha1(time());

            $prefix = 'teacher';

            $name = $prefix.'_'.$token.'.'.$ext;

            $path = 'uploads/teacher';

            $file->move($path, $name);      

            $image = $name;
        }
        else
        {
            $image = 'teacher.jpg';
        }

        $teacher = new Teacher;

        $teacher->first_name = $data['first_name'];
        $teacher->last_name  = $data['last_name'];
        $teacher->dept       = $data['dept'];
        $teacher->age        = $data['age'];
        $teacher->email      = $data['email'];
        $teacher->address    = $data['address'];
        $teacher->contact    = $data['contact'];
        $teacher->designation= $data['designation'];
        $teacher->image      = $image;
        $teacher->created_by = 1;
        $teacher->updated_by = 1;

        if ($teacher->save()) 
        {
            return redirect()
                   ->route('admin_teacher_index')
                   ->with('status', 'success')
                   ->with('message', 'Teacher Added Successfully!');
        }

        else
        {
            return redirect()
                   ->route('admin_teacher_create')
                   ->with('status', 'danger')
                   ->with('message', 'Teacher can not be added!!');
        }

    }

    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.show',compact('teacher','id'));
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.edit',compact('teacher','id'));
    }

    public function update(Request $request, $id)
    {
        
         $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'dept'       => 'required',
            'age'        => 'required',     
            'email'      => 'required',
            'address'    => 'required',
            'contact'    => 'required',
             'designation' => 'required',
            'image'      => 'required'
        ]);

        $data = $request->all();

        // Image Upload...
        if($request->file('image'))
        {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();

            $token = sha1(time());

            $prefix = 'teacher';

            $name = $prefix.'_'.$token.'.'.$ext;

            $path = 'uploads/teacher';

            $file->move($path, $name);      

            $image = $name;
        }
        else
        {
            $image = 'teacher.jpg';
        }

         $teacher = Teacher::find($id);

        $teacher->first_name = $data['first_name'];
        $teacher->last_name  = $data['last_name'];
        $teacher->dept       = $data['dept'];
        $teacher->age        = $data['age'];
        $teacher->email      = $data['email'];
        $teacher->address    = $data['address'];
        $teacher->contact    = $data['contact'];
        $teacher->designation    = $data['designation'];
        $teacher->image      = $image;
        $teacher->created_by = 1;
        $teacher->updated_by = 1;

        if ($teacher->update()) 
        {
            return redirect()
                   ->route('admin_teacher_index')
                   ->with('status', 'success')
                   ->with('message', 'Teacher Updated Successfully!');
        }

        else
        {
            return redirect()
                   ->route('admin_teacher_edit')
                   ->with('status', 'danger')
                   ->with('message', 'Teacher can not be updated!!');
        }
    }

    public function destroy($id)
    {
         $teacher = Teacher::find($id);

        if ($teacher->delete()) 
        {
            $path = "uploads/teacher";
            $image = $teacher->image;

            $deletable = $path."/".$image;

            if(File::exists($deletable))
            {
                File::delete($deletable);

                return redirect()
                   ->route('admin_teacher_index')
                   ->with('status', 'success')
                   ->with('message', 'Teacher Deleted Successfully!');
            }
            
            
        }
    
    }
}
