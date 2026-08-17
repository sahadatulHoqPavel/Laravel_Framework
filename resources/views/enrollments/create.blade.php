
@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Create Enrollment </h2>
                </div>

                <div class="card-body"> 
                    <form action="{{ url('/enrollments') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="course_code" class="form-label">Enroll No</label>
                        <input type="text" class="form-control" name="enrollNo" id="name"></br>
                        <label for="batch_id" class="form-label">Batch Name</label>
                        <select name='batch_id' id="batch_id" class="form-control">
                            @foreach($batches as $items)
                            <option value="{{$items->id}}">
                                {{$items->name}}
                            </option>

                            @endforeach

                        </select>
                        <label for="student_id" class="">Student Name</label>
                        <select name="student_id" id="student_id" class="form-control">
                            @foreach($students as $items)
                                <option value="{{$items->id}}">
                                    {{$items->name}}
                                </option>
                            @endforeach
                        </select>
                        <label for="syllabus" class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date"></br> 
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
            </div>
    @endsection
    



