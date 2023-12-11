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
                            <a class="btn btn-primary" href="{{route('showBankPage')}}">Add Bank</a>
                        </h3>
                        <div id="successMessage" style="display: none; color:blue; text-align:end">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bank Name:</th>
                                    <th>Bank Status:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $banks as $bank)
                                <tr>
                                    <td>{{$bank->bank_name}}</td>
                                    <td> @if( $bank->bank_status == 1)
                                        <a href="{{route('ActiveBank',$bank->id)}}"> Active</a>
                                        @else
                                        <a href="{{route('ActiveBank',$bank->id)}}"> Deactive</a>
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