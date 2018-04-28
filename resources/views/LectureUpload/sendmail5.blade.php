@extends('layouts.admin2')

@section('title', 'Course list')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Send Lecture</h1>

                {{ Form::open(['url'=>route('three_one_postmail'), 'files'=> 'true']) }}

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject">

                </div>

                <div class="form-group">

                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>

                </div>


                <input type="file" name="a_file">

                <button type="submit" class="btn btn-lg btn-success">Send</button>
                </form>


            </div>
        </div>
    </div>


@endsection