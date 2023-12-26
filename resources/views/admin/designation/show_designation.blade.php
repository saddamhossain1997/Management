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
                            <a class="btn btn-primary" href="{{route('showDesignationPage')}}">Add Designation</a>
                        </h3>
                        <div id="successMessage" style="display: none; color:blue; text-align:end">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Designation Name:</th>
                                    <th>Department Name:</th>
                                    <th>Designation Status:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $designations as $designation)
                                <tr>
                                    <td>{{$designation->designation_name}}</td>
                                    <td>{{$designation->department->department_name}}</td>
                                    <td> @if( $designation->designation_status == 1)
                                        <a href="{{route('ActiveDesignation',$designation->id)}}"> Active</a>
                                        @else
                                        <a href="{{route('ActiveDesignation',$designation->id)}}"> Deactive</a>
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