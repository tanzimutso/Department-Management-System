@extends('layouts.admin')

@section('title', 'Teacher List')

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
            @if(Auth::user()->role == '2')

                <a href="{{ route('admin_teacher_create') }}"><input type="submit" class="btn btn-primary" name="signup" value="Create Teacher"></a>
            @else
                <button class="btn btn-primary" disabled="disabled"><a  href="{{ route('admin_teacher_create') }}">
                    </a>Create Teacher</button>
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
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $count++ }}.</td>
                    <td>
                        <img src="{{ $teacher->image == 'teacher.jpg' ? url('uploads/teacher/teacher.jpg') : url('uploads/teacher/' . $teacher->image) }}" height="100" width="150">
                    </td>
                    <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                    <td>
                        {{ $teacher->dept }}
                    </td>
                    <td>
                        {{ $teacher->designation }}
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin_teacher_show', ['id' => $teacher->id]) }}"">
                            <i class="fa fa-search-plus "></i>
                        </a>

                        @if(Auth::check())
                            @if(Auth::user()->role == '2' or Auth::user()->role == '3')
                                <a class="btn btn-info" href="{{ route('admin_teacher_edit', ['id' => $teacher->id]) }}">
                                    <i class="fa fa-edit "></i>
                                </a>

                            @else
                                <button class="btn btn-info" disabled="disabled"><a  href="{{ route('admin_teacher_edit', ['id' => $teacher->id]) }}">
                                    </a><i class="fa fa-edit "></i></button>
                            @endif

                        @endif

                        @if(Auth::check())
                            @if(Auth::user()->role == '2' or Auth::user()->role == '3')
                                <a class="btn btn-danger delete" style="color: #fff;">
                                    <i class="fa fa-trash-o "></i></a>
                                <input class="delete_url" type="hidden" value="{{ route('admin_teacher_delete', ['id' => $teacher->id]) }}">

                            @else
                                <button class="btn btn-danger delete" disabled="disabled"><a  href="{{ route('admin_teacher_delete', ['id' => $teacher->id]) }}">
                                    </a><i class="fa fa-trash-o "></i></button>
                            @endif

                        @endif



                    </td>
                </tr>
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
