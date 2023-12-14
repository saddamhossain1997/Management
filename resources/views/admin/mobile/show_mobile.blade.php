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
                            <a class="btn btn-primary" href="{{route('showMobilePage')}}">Add Mobile Bank</a>
                        </h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name:</th>
                                    <th>Mobile No:</th>
                                    <th>Opening Balance:</th>
                                    <th>Total:</th>
                                    <th>Status:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $mobiles as $mobile)
                                <tr>
                                    <td>{{$mobile->mobile_name}}</td>
                                    <td>{{$mobile->mobile}}</td>
                                    <td>{{$mobile->mobile_opening_balance}}</td>
                                    <td>{{$mobile->mobile_opening_balance}}</td>
                                    <td> @if( $mobile->mobile_status == 1)
                                        <a href="{{route('ActiveMobile',$mobile->id)}}"> Active</a>
                                        @else
                                        <a href="{{route('ActiveMobile',$mobile->id)}}"> Deactive</a>
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