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
                            <a class="btn btn-primary" href="{{route('showAccountPage')}}">Add Account</a>
                        </h3>
                        <div id="successMessage" style="display: none; color:blue; text-align:end">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Account name:</th>
                                    <th>Account No:</th>
                                    <th>Bank:</th>
                                    <th>Branch:</th>
                                    <th>Opening Balance:</th>
                                    <th>Cash Balance:</th>
                                    <th>Status:</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $accounts as $Account)
                                <tr>
                                    <td>{{$Account->account_name}}</td>
                                    <td>{{$Account->account_no}}</td>
                                    <td>{{$Account->bank_name}}</td>
                                    <td>{{$Account->branch_name}}</td>
                                    <td>{{$Account->account_opening_balance}}</td>
                                    <td>{{$Account->account_opening_balance}}</td>
                                    <td> @if( $Account->account_status == 1)
                                        <a href="{{route('ActiveAccount',$Account->id)}}"> Active</a>
                                        @else
                                        <a href="{{route('ActiveAccount',$Account->id)}}"> Deactive</a>
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