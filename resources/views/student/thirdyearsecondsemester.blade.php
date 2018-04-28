@extends('layouts.admin')

@section('title', '3rd Year 2nd semester')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">

            <div class="card-actions">

            </div>
        </div>

        <div class="card-block">
            <div class="form-group col-md-6">

                @if(Auth::check())
                    @if(Auth::user()->role == '1')

                        <a href="{{ route('admin_student_create') }}"><input type="submit" class="btn btn-primary" name="signup" value="Create Student"></a>
                    @else
                        <button class="btn btn-primary" disabled="disabled"><a  href="{{ route('admin_student_create') }}">
                            </a>Create Student</button>
                    @endif

                @endif
            </div>
            <table class="table table-striped table-bordered datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>Dept</th>
                    <th>Id</th>
                    <th>Session</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1;
                    $token = Auth::user()->remember_token;
                ?>

                @foreach($students as $student)
                    @if($student->year == "3rd" && $student->semester == "2nd")
                        <tr>
                            <td>{{ $count++ }}.</td>
                            <td>
                                <img src="{{ $student->image == 'student.jpg' ? url('uploads/student/student.jpg') : url('uploads/student/' . $student->image) }}" height="100" width="150">
                            </td>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->dept }}</td>
                            <td>
                                {{ $student->student_id }}
                            </td>
                            <td>
                                {{ $student->session }}
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('admin_student_show', ['id' => $student->id]) }}">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                @if(Auth::check())
                                    @if(Auth::user()->role == '1' or Auth::user()->role =='3')
                                        <a class="btn btn-info" href="{{ route('admin_student_edit', ['id' => $student->id]) }}">
                                            <i class="fa fa-edit "></i>
                                        </a>

                                    @else
                                        <button class="btn btn-info" disabled="disabled"><a  href="{{ route('admin_student_edit', ['id' => $student->id]) }}">
                                            </a><i class="fa fa-edit "></i></button>
                                    @endif

                                @endif
                                @if(Auth::check())
                                    @if(Auth::user()->role == '1' or Auth::user()->role =='3')
                                        <a class="btn btn-danger delete" style="color: #fff;">
                                            <i class="fa fa-trash-o "></i></a>
                                        <input class="delete_url" type="hidden" value="{{ route('admin_student_delete', ['id' => $student->id]) }}">

                                    @else
                                        <button class="btn btn-danger delete" disabled="disabled"><a  href="{{ route('admin_student_delete', ['id' => $student->id]) }}">
                                            </a><i class="fa fa-trash-o "></i></button>
                                    @endif

                                @endif

                            </td>

                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('.delete').click(function () {

            var url = $(this).next('.delete_url').val();

            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                window.location.href = url;
            })

        });
    </script>
@endsection
