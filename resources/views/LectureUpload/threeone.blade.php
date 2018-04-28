@extends('layouts.admin')

@section('title', '3rd Year 1st semester courses')

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
                        CSE 3101
                    </td>
                    <td>Operating Systems</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        CSE 3102
                    </td>
                    <td>Operating Systems Lab</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        CSE 3103
                    </td>
                    <td>Microprocessor and assembly Language</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        CSE 3104
                    </td>
                    <td>Microprocessor and assembly Language Lab</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        CSE 3105
                    </td>
                    <td>Database Management Systems</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        CSE 3106
                    </td>
                    <td>Database Management Systems Lab</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        CSE 3107
                    </td>
                    <td>Software Engineering</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        CSE 3109
                    </td>
                    <td>Data communication</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        CSE 3110
                    </td>
                    <td>Data communication Lab</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        CSE 3111
                    </td>
                    <td>Theory of Computing</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        CSE 3116
                    </td>
                    <td>Software Development project -2 and Industrial Tour</td>
                    <td><a href="{{ route('sendmailthreeone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection
