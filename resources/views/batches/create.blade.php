
@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Create Batches </h2>
                </div>

                <div class="card-body"> 
                    <form action="{{ url('/batches') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="course_code" class="form-label">Batch Name</label>
                        <input type="text" class="form-control" name="name" id="name"></br>
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" name="course_id" id="course_id"></br>
                        <label for="syllabus" class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date"></br> 
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
            </div>
    @endsection
    