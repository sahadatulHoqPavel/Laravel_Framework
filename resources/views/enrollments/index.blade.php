@extends('layout')

@section('content')

            <div class="card">
                <div class="card-header">
                    <h3>Batch Application</h3>
                </div>

                <div class="card-body">

                    <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <br><br>
 
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Batch Name</th>
                                    <th>Course Id</th>
                                    <th>Start Date</th>
                                
                                </tr>
                            </thead>

                            <tbody>
                         
                                @for($i=0; $i< count($batches); $i++)
                            <tr>     
                                    <td>{{$i+1}}</td>  
                                    <td>{{$batches[$i]->name}}</td>
                                    <td>{{$batches[$i]->course_id}}</td>
                                    <td>{{$batches[$i]->start_date}}</td>

                                    <td>

                                        <a href="{{ url('/batches/' . $batches[$i]->id) }}" title="View Student">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </button>
                                        </a>

                                        <a href="{{ url('/batches/' . $batches[$i]->id . '/edit') }}" title="Edit Student"> 
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>

                                        <form method="POST"
                                              action="{{ url('/batches/' . $batches[$i]->id) }}"
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