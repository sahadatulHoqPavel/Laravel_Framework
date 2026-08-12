
@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">Student Details</div>
                <div class="card-body">
                    <div class= "card-body">
                        <h5 class="card-title">Name: {{ $student->name}}</h5>
                        <p class="card-text">Email: {{ $student->email}}</p>
                        <p class="card-text">Age: {{ $student->age}}</p>
                        <p class ="card-text">Mobile No: {{ $student->mobileNo}}</p>
                    </div>

@endsection 


