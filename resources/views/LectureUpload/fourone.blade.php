@extends('layouts.admin')

@section('title', '4th Year 1st semester courses')

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
                        CSE 4101
                    </td>
                    <td>Artificial Intelligence and Expert Systems</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        CSE 4102
                    </td>
                    <td>Artificial Intelligence and Expert Systems Lab</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        CSE 4103
                    </td>
                    <td>VLSI Design</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        CSE 4104
                    </td>
                    <td>VLSI Design Lab</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        CSE 4105
                    </td>
                    <td>Digital Image Processing and Computer Vision</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        CSE 4106
                    </td>
                    <td>Digital Image Processing and Computer Vision Lab</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        CSE 4107
                    </td>
                    <td>Networking Routing and Switching</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        CSE 4108
                    </td>
                    <td>Networking Routing and Switching Lab</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        CSE 4113
                    </td>
                    <td>It Organization and management </td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        CSE 4115
                    </td>
                    <td>Optional-1</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        CSE 4116
                    </td>
                    <td>Optional-1 Lab</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>
                        CSE 5000
                    </td>
                    <td>Research Project</td>
                    <td><a href="{{ route('sendmailfourone') }}"><button class="btn-success">Upload</button></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection
