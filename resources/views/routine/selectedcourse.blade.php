@extends('layouts.admin2')

@section('title', 'Student List')

@section('content')




        <div  class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
            <label for="role" class="col-md-4 control-label">Year</label>

            <div class="col-md-6" id="year">
                @foreach( $idArray as $courseid){

                <div>
                    <ul>
                        <li>{{ $courseid }}</li>
                    </ul>
                </div>

                }
                @endforeach
            </div>
        </div>

        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </div>
        </div>
    </form>

@endsection
