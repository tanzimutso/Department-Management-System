<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('notice.allnotice',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.createnotice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required',
            'created_in'  => 'required',


        ]);

        $data = $request->all();

        $notice = new Notice;

        $notice->title = $data['title'];
        $notice->body  = $data['body'];
        $notice->created_in  = $data['created_in'];

        if ($notice->save())
        {
            return redirect()
                ->route('allnotice')
                ->with('status', 'success')
                ->with('message', 'Notice Added Successfully!');
        }

        else
        {
            return redirect()
                ->route('notice_create')
                ->with('status', 'danger')
                ->with('message', 'Notice can not be added!!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);
        return view('notice.shownotice',compact('notice','id'));
    }

    public function showallnotice(){

        $notices = Notice::all();
        return view("notice.shownotice",compact('notices'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('notice.editnotice',compact('notice','id'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required',
            'created_in' => 'required',


        ]);

        $data = $request->all();

        $notice = Notice::find($id);

        $notice->title = $data['title'];
        $notice->body  = $data['body'];
        $notice->created_in  = $data['created_in'];

        if ($notice->update())
        {
            return redirect()
                ->route('allnotice')
                ->with('status', 'success')
                ->with('message', 'Notice Updated Successfully!');
        }

        else
        {
            return redirect()
                ->route('notice_edit')
                ->with('status', 'danger')
                ->with('message', 'Notice can not be updated!!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        if($notice->delete())
        {
            return redirect()
                ->route('allnotice')
                ->with('status','danger')
                ->with('message','Notice deleted Successfully!');
        }
    }
}
