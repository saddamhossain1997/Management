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
                            <a class="btn btn-primary" href="{{route('showBricksAdd')}}">Add Bricks Configure</a>

                        </h3>

                        <div id="successMessage" style="display: none; color:blue; text-align:end">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Data:</th>
                                    <th>Configure No:</th>
                                    <th>Total Bricks:</th>
                                    <th>Total Mortar(DRY):</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $bricks as $brick)


                                <tr>
                                    <td>{{$brick->date}}</td>
                                    <td>{{$brick->id}}</td>
                                    <td>{{$brick->BricksExtra->TotalBricks}}</td>
                                    <td>{{$brick->DryMortar}}</td>
                                    <td><a href="{{route('showBricksDetails',$brick->id)}}">Details</a></td>
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

<!-- ==================modal====================== -->







@endsection