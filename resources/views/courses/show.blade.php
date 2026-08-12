
@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">Courses Details</div>
                <div class="card-body">
                    <div class= "card-body">
                        <h5 class="card-title">Course Code  : {{ $course->course_code}}</h5>
                        <p class="card-text">Course Name    : {{ $course->course_name}}</p>
                        <p class="card-text">Syllabus       : {{ $course->syllabus}}</p>

                    </div>

@endsection 


