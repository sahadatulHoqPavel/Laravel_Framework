
@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Create Enrollment </h2>
                </div>

                <div class="card-body"> 
                    <form action="{{ url('/enrollments') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="course_code" class="form-label">Enrollment No</label>
                        <input type="text" class="form-control" name="enrollNo" id="name"></br>
                        <label for="batch_id" class="form-label">Batch No</label>
                        <select name='batch_id' id="batch_id" class="form-control">
                            @foreach($batches as $items)
                            <option value="{{$items->id}}">
                                {{$items->name}}
                            </option>

                            @endforeach

                        </select></br>
                        <label for="student_id" class="">Student Name</label>
                        <select name="student_id" id="student_id" class="form-control">
                            @foreach($students as $items)
                                <option value="{{$items->id}}">
                                    {{$items->name}}
                                </option>
                            @endforeach
                        </select></br>
                        <label for="join_date" class="form-label">Join Date</label>
                        <input type="date" class="form-control" name="join_date" id="join_date"></br> 
                         <label for="fee" class="form-label">Fee</label>
                        <input type="text" class="form-control" name="fee" id="fee"></br> 
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
            </div>
    @endsection
    



