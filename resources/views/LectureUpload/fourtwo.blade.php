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
                    <th>Lecture Upload</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        CSE 4201
                    </td>
                    <td>Computer Graphics and Animation</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        CSE 4202
                    </td>
                    <td>Computer Graphics and Animation Lab</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        CSE 4203
                    </td>
                    <td>Neural Network and Fuzzy System</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        CSE 4202
                    </td>
                    <td>Neural Network and Fuzzy System Lab</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        CSE 4205
                    </td>
                    <td>Optional-2</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        CSE 4206
                    </td>
                    <td>Optional-2 Lab</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        CSE 4207
                    </td>
                    <td>Optional-3</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        CSE 5000
                    </td>
                    <td>Research Project</td>
                    <td><a href="{{ route('sendmailfourtwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection
