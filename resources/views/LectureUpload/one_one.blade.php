@extends('layouts.admin')

@section('title', '1st Year 1st semester courses')

@section('content')

    <div class="card">
        <div class="card-header">

            <div class="card-actions">

            </div>
        </div>

        <div class="card-block">
            <div class="form-group col-md-6">


            </div>
            <table class="table table-striped table-bordered datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Upload Lecture</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        CSE 1101
                    </td>
                    <td>Computer Basics and Programming Fundamentals</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        CSE 1102
                    </td>
                    <td>Computer Basics and Programming Fundamentals Lab</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        CSE 1103
                    </td>
                    <td>Electrical Circuit Analysis</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        CSE 1104
                    </td>
                    <td>Electrical Circuit Analysis Lab</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        CSE 1105
                    </td>
                    <td>mathematics 1</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        CSE 1107
                    </td>
                    <td>English</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        CSE 1109
                    </td>
                    <td>Economics and Sociology</td>
                    <td><a href="{{ route('sendmailoneone') }}"><button class="btn-success">Upload</button></a></td>

                </tr>


                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection
