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
                            <a class="btn btn-primary" href="{{route('showPlasterAdd')}}">Add Plaster Configure</a>

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
                                    <th>Total Plaster Area:</th>
                                    <th>Total Cement:</th>
                                    <th>Total Sends:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ( $plasters as $plaster)

                                <tr>
                                    <td>{{$plaster->date}}</td>
                                    <td>{{$plaster->id}}</td>
                                    <td>{{$plaster->PlasterExtra->sum('TotalPlasterArea')}}</td>
                                    <td>{{$plaster->CementCostPerBag}}</td>
                                    <td>{{$plaster->PlasterCostPerPcs}}</td>
                                    <td><a href="{{route('showPlasterDetails',$plaster->id)}}">Details</a></td>
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