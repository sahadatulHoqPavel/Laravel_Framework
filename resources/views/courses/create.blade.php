
@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Create Courses </h2>
                </div>

                <div class="card-body"> 
                    <form action="{{ url('/courses') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="course_code" class="form-label">Course Code</label>
                        <input type="text" class="form-control" name="course_code" id="course_code"></br>
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="course_name" class="form-control" name="course_name" id="course_name"></br>
                        <label for="syllabus" class="form-label">Syllabus</label>
                        <input type="syllabus" class="form-control" name="syllabus" id="syllabus"></br> 
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
            </div>
    @endsection
    