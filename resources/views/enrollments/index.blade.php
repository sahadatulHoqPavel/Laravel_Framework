@extends('layout')

@section('content')

            <div class="card">
                <div class="card-header">
                    <h3>Enrollments Application</h3>
                </div>

                <div class="card-body">

                    <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <br><br>
 
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Enroll No</th>
                                    <th>Batch No</th>
                                    <th>Student Name</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($enrollments as $enrollment)                    
                            <tr>  
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$enrollment->enrollNo}}</td>
                                    <td>{{$enrollment->batch->name}}</td>
                                    <td>{{$enrollment->student->name}}</td>
                                    <td>{{$enrollment->join_date}}</td>
                                    <td>{{$enrollment->fee}}</td>

                                    <td>

                                        <a href="{{ url('/enrollments/' . $enrollment->id) }}" title="View Student">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </button>
                                        </a>

                                        <a href="{{ url('/enrollments/' . $enrollment->id. '/edit') }}" title="Edit Student"> 
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>

                                        <form method="POST"
                                              action="{{ url('/enrollments/' . $enrollment->id) }}"
                                              accept-charset="UTF-8"
                                              style="display:inline">

                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Delete Course"
                                                    onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>

                                        </form>

                                    </td>

                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
    

@endsection