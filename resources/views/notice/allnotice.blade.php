@extends('layouts.admin')

@section('title', 'Notice List')

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
                    @if(Auth::user()->role == '2' or Auth::user()->role == '3')

                        <a href="{{ route('notice_create') }}"><input type="submit" class="btn btn-primary" name="notice" value="Create Notice"></a>
                    @else
                        <button class="btn btn-primary" disabled="disabled"><a  href="{{ route('notice_create') }}">
                            </a>Create Notice</button>
                    @endif

                @endif

            </div>
            <table class="table table-striped table-bordered datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th style="text-align: center;">Notice</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                @foreach($notices as $notice)
                    <tr>
                        <td>{{ $count++ }}.</td>
                        <td>
                            {{ $notice->title }}
                        </td>
                        <td>{{ $notice->body }} <br><br>

                            @if(Auth::check())
                                @if(Auth::user()->role == '2' or Auth::user()->role == '3')
                                    <a class="btn btn-info" href="{{ route('notice_edit', ['id' => $notice->id]) }}">
                                        Edit
                                    </a>

                                @else
                                    <button class="btn btn-info" disabled="disabled"><a  href="{{ route('notice_edit', ['id' => $notice->id]) }}">
                                            Edit</a></button>
                                @endif

                            @endif



                            @if(Auth::check())
                                @if(Auth::user()->role == '2' or Auth::user()->role == '3')
                                    <a class="btn btn-danger delete" style="color: #fff; margin-left: 20px;">
                                        Delete</a>
                                    <input class="delete_url" type="hidden" value="{{ route('notice_delete', ['id' => $notice->id]) }}">

                                @else
                                    <button class="btn btn-danger delete" disabled="disabled"><a  href="{{ route('notice_delete', ['id' => $notice->id]) }}">
                                        </a>Delete</button>
                                @endif

                            @endif

                        </td>
                        <td>

                            <?php
                                $date = $notice->created_in;
                                $newdate = (string)$date;
                            $newdate = str_replace("-"," ",$newdate);
                            $DateArray = (explode(" ",$newdate));
                            echo $DateArray[2]."-".$DateArray[1]."-".$DateArray[0];
                                    ?>
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
