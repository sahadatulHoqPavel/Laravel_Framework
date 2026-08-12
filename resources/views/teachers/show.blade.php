
@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">Teacher Details</div>
                <div class="card-body">
                    <div class= "card-body">
                        <h5 class="card-title">Name: {{ $teacher->name}}</h5>
                        <p class="card-text">Email: {{ $teacher->email}}</p>
                        <p class="card-text">Age: {{ $teacher->age}}</p>
                        <p class ="card-text">Mobile No: {{ $teacher->mobileNo}}</p>
                    </div>

@endsection 


