<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\requests;
use Mail;
use App\Post;
use Auth;
use Session;
use Redirect;
use Image;
use Storage;
use App\Mailfile;
use App\Student;



class LectureUploadController extends Controller
{
    public function index1()
    {

        return view("LectureUpload.sendmail1");
    }

    public function index2()
    {

        return view("LectureUpload.sendmail2");
    }

    public function index3()
    {

        return view("LectureUpload.sendmail3");
    }

    public function index4()
    {

        return view("LectureUpload.sendmail4");
    }

    public function index5()
    {

        return view("LectureUpload.sendmail5");
    }

    public function index6()
    {

        return view("LectureUpload.sendmail6");
    }

    public function index7()
    {

        return view("LectureUpload.sendmail7");
    }

    public function index8()
    {

        return view("LectureUpload.sendmail8");
    }



    public function allbatches()
    {

        return view("LectureUpload.index");
    }

    public function sendmailToOneOne()
    {

        //return $one_one_row;

        return view("LectureUpload.one_one");
    }

    public function sendmailToOneTwo()
    {


        //return $one_one_row[1]->email;

        return view("LectureUpload.one_two");
    }

    public function sendmailToTwoOne()
    {


        return view("LectureUpload.two_one");
    }

    public function sendmailToTwoTwo()
    {


        return view("LectureUpload.two_two");
    }

    public function sendmailToThreeOne()
    {


        return view("LectureUpload.threeone");
    }

    public function sendmailToThreeTwo()
    {

//        $year = '3rd';
//        $semester = '2nd';
//
//        $three_two_row = Student::where('year', $year)->where('semester', $semester)->get();
//        //return $three_two_row[0]->email;

        return view("LectureUpload.threetwo");
    }

    public function sendmailToFourOne()
    {


        return view("LectureUpload.fourone");
    }

    public function sendmailToFourTwo()
    {


        return view("LectureUpload.fourtwo");
    }





    public function postmailoneone(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '1st';
        $semester = '1st';

        $one_one_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($one_one_row as $oneone) {

            $data = array(
                'email' => $oneone->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailoneone'));

        }
    }

    public function postmailonetwo(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '1st';
        $semester = '2nd';

        $one_two_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($one_two_row as $onetwo) {

            $data = array(
                'email' => $onetwo->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailonetwo'));


        }
    }

    public function postmailtwoone(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '2nd';
        $semester = '1st';

        $two_one_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($two_one_row as $twoone) {

            $data = array(
                'email' => $twoone->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailtwoone'));


        }
    }

    public function postmailtwotwo(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '2nd';
        $semester = '2nd';

        $two_two_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($two_two_row as $twotwo) {

            $data = array(
                'email' => $twotwo->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailtwotwo'));


        }
    }

    public function postmailthreeone(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '3rd';
        $semester = '1st';

        $three_one_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($three_one_row as $threeone) {

            $data = array(
                'email' => $threeone->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailthreeone'));


        }
    }

    public function postmailthreetwo(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '3rd';
        $semester = '2nd';

        $three_two_row = Student::where('year',$year)->where('semester',$semester)->get();
        //return $three_two_row;

        foreach ($three_two_row as $threetwo) {

            $data = array(
                'email' => $threetwo->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailthreetwo'));


        }
    }

    public function postmailfourone(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '4th';
        $semester = '1st';

        $four_one_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($four_one_row as $fourone) {

            $data = array(
                'email' => $fourone->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailfourone'));


        }
    }

    public function postmailfourtwo(Request $request){

        $this->validate($request,[
            'a_file'=> 'mimes:txt,pdf,ppt,xls,doc,docx',
        ]);

        $year = '4th';
        $semester = '2nd';

        $four_two_row = Student::where('year',$year)->where('semester',$semester)->get();

        foreach ($four_two_row as $fourtwo) {

            $data = array(
                'email' => $fourtwo->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message,
                'a_file' => $request->a_file,
            );

            Mail::send('LectureUpload.mention', $data, function ($message) use ($data) {

                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('utsombstu@gmail.com');
                $message->attach($data['a_file']->getRealPath(), array(
                        'as' => 'a_file.' . $data['a_file']->getClientOriginalExtension(),
                        'mime' => $data['a_file']->getMimeType())
                );


            });


            session::flash('success', "Congratz!! Mail Sent Successfully");
            return Redirect::to(route('sendmailfourtwo'));


        }
    }
}
