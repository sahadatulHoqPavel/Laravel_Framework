@extends('layout')
@section('content')
 
        <div class="card">
            <div class="card-header"><h2>Edit Student</h2></div>
                <div class="card-body">
                    <form action="{{ url('/courses/' . $course->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="{{$course->id }}"></br>
                        <label for="name" class="form-label">Course Code</label>
                        <input type="text" class="form-control" name="course_code" id="course_code" value="{{$course->course_code }}"></br>
                        <label for="name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" name="course_name" id="course_name" value="{{$course->course_name }}">
                        <label for="name" class="form-label">Syllabus</label>
                        <input type="text" class="form-control" name="syllabus" id="syllabus" value="{{$course->syllabus }}"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>
                </div>
        </div>
    @stop
