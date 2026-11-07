
@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">Enrollment Details</div>
                <div class="card-body">
                    <div class= "card-body">
                        <h5 class="card-title"> Enrollment No    : {{ $enrollment->id}}</h5>
                        <p class="card-text">   Batch No         : {{ $enrollment->batch->name}}</p>
                        <p class="card-text">   Student Name     : {{ $enrollment->student->name}}</p>
                        <p class="card-text">   Join Date        : {{ $enrollment->join_date}}</p>
                        <p class="card-text">   Fee              : {{ $enrollment->fee}}</p>

                    </div>

@endsection 


