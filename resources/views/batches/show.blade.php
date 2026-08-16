
@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">Batch Details</div>
                <div class="card-body">
                    <div class= "card-body">
                        <h5 class="card-title">Batch Name  : {{ $batch->name}}</h5>
                        <p class="card-text">Course Name    : {{ $batch->course_id}}</p>
                        <p class="card-text">Start Date       : {{ $batch->start_date}}</p>

                    </div>

@endsection 


