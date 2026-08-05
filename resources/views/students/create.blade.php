
@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Student Application</h2>
                </div>

                <div class="card-body"> 
                    <form action="{{ url('/students') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"></br>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"></br>
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="age"></br>
                        <label for="mobileNo" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" name="mobileNo" id="mobileNo"></br> 
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
            </div>
    @endsection
    