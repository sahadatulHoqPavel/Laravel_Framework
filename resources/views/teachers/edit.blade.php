@extends('layout')
@section('content')
 
        <div class="card">
            <div class="card-header"><h2>Edit Teacher</h2></div>
                <div class="card-body">
                    <form action="{{ url('/teachers/' . $teacher->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="{{$teacher->id }}"></br>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$teacher->name }}"></br>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$teacher->email }}">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="{{$teacher->age }}"></br>
                        <label for="mobileNo" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" name="mobileNo" id="mobileNo" value="{{$teacher->mobileNo }}"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>
                </div>
        </div>
    @stop
