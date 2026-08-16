@extends('layout')
@section('content')
 
        <div class="card">
            <div class="card-header"><h2>Edit Student</h2></div>
                <div class="card-body">
                    <form action="{{ url('/batches/' . $batch->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="{{$batch->id }}"></br>
                        <label for="name" class="form-label">Batch Name</label>
                        <input type="text" class="form-control" name="batch_name" id="name" value="{{$batch->name }}"></br>
                        <label for="course_id" class="form-label">Course Name</label>
                        <input type="text" class="form-control" name="course_id" id="course_id" value="{{$batch->course_id }}">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date" value="{{$batch->start_date }}"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>
                </div>
        </div>
    @stop
