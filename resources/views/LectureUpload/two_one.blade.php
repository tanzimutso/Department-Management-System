@extends('layouts.admin')

@section('title', '2nd Year 1st semester courses')

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
                        CSE 2101
                    </td>
                    <td>Object Oriented Programming</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        CSE 2102
                    </td>
                    <td>Object Oriented Programming Lab</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        CSE 2103
                    </td>
                    <td>Data Structures</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        CSE 2104
                    </td>
                    <td>Data Structures Lab </td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        CSE 2105
                    </td>
                    <td>Digital Electronics</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        CSE 2106
                    </td>
                    <td>Digital Electronics Lab,Vector analysis</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        CSE 2107
                    </td>
                    <td>Mathematics 3</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        CSE 2109
                    </td>
                    <td>Statistics</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        CSE 2111
                    </td>
                    <td>Accounting</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        CSE 2112
                    </td>
                    <td>Software development project and Industrial tour</td>
                    <td><a href="{{ route('sendmailtwoone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection
