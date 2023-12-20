@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <!-- /.card -->

                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a class="btn btn-primary" href="{{route('showDepartmentPage')}}">Add department</a>
                        </h3>
                        <!-- <form action="{{route('search')}}" method="post">
                            @csrf
                            <h3>
                                <input type="date" name="search">
                                <button type="submit">Search</button>
                            </h3>
                        </form> -->
                        <div id="successMessage" style="display: none; color:blue; text-align:end">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>department Name:</th>
                                    <th>department Status:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $departments as $department)
                                <tr>
                                    <td>{{$department->department_name}}</td>
                                    <td> @if( $department->department_status == 1)
                                        <a href="{{route('ActiveDepartment',$department->id)}}"> Active</a>
                                        @else
                                        <a href="{{route('ActiveDepartment',$department->id)}}"> Deactive</a>
                                        @endif
                                    </td>
                                    <td><a href="$">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>



@endsection