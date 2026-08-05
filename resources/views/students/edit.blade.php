@extends('layout')
@section('content')
 
        <div class="card">
            <div class="card-header"><h2>Edit Student</h2></div>
                <div class="card-body">
                    <form action="{{ url('/students/' . $student->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="{{$student->id }}"></br>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$student->name }}"></br>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$student->email }}">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="{{$student->age }}"></br>
                        <label for="mobileNo" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" name="mobileNo" id="mobileNo" value="{{$student->mobileNo }}"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>
                </div>
        </div>
    @stop
