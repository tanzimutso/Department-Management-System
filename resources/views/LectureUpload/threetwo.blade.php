@extends('layouts.admin')

@section('title', '3rd Year 2nd semester courses')

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
                        CSE 3201
                    </td>
                    <td>Compiler Design</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        CSE 3202
                    </td>
                    <td>Compiler Design Lab</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        CSE 3203
                    </td>
                    <td>Computer Networks</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        CSE 3204
                    </td>
                    <td>Computer Networks Lab</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        CSE 3205
                    </td>
                    <td>Computer Peripherals and Interfacing</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        CSE 3206
                    </td>
                    <td>Computer Peripherals and Interfacing Lab</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        CSE 3208
                    </td>
                    <td>Relational Database Management System Lab</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        CSE 3209
                    </td>
                    <td>Multimedia and Web Engineering</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        CSE 3210
                    </td>
                    <td>Multimedia and Web Engineering Lab</td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        CSE 3211
                    </td>
                    <td>Communication Engineering </td>
                    <td><a href="{{ route('sendmailthreetwo') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection
