@extends('layout')

@section('content')

            <div class="card">
                <div class="card-header">
                    <h3>Course Application</h3>
                </div>

                <div class="card-body">

                    <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <br><br>
 
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Syllabus</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>

                            <tbody>
                                

                                @for($i=0; $i< count($courses); $i++)
                            <tr>     
                                    <td>{{$i+1}}</td>  
                                    <td>{{$courses[$i]->course_code}}</td>
                                    <td>{{$courses[$i]->course_name}}</td>
                                    <td>{{$courses[$i]->syllabus}}</td>

                                    <td>

                                        <a href="{{ url('/courses/' . $courses[$i]->id) }}" title="View Student">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </button>
                                        </a>

                                        <a href="{{ url('/courses/' . $courses[$i]->id . '/edit') }}" title="Edit Student"> 
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>

                                        <form method="POST"
                                              action="{{ url('/courses/' . $courses[$i]->id) }}"
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
                                @endfor

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
    

@endsection