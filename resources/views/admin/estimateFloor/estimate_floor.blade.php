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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Estimate Floor</button>
                        </h3>

                        <div id="successMessage" style="display: none; color:blue; text-align:end">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name:</th>
                                    <th>Status:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $estimatesFloor as $estimate)
                                <tr>
                                    <td>{{$estimate->name}}</td>

                                    <td>
                                        @if( $estimate->status == 1)
                                        <a href="{{route('Active',$estimate->id)}}"> Active</a>

                                        @else
                                        <a href="{{route('Active',$estimate->id)}}"> Deactive</a>

                                        @endif

                                    </td>
                                    <td><a href="">Edit</a></td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Estimate Floor Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="yourForm" method="post">
                    @csrf
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Name *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Estimate Project name</label>

                                <div class="col-sm-10">
                                    <select name="estimate_project_id" class="form-control" id="cars">
                                        <option value="volvo">Select Estimate Project name </option>
                                        @foreach( $projects as $project )
                                        <option value="{{ $project->id}}">{{ $project->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Status *</label>

                                <div class="col-sm-10">

                                    <div class="radio" style="display: inline">
                                        <label>
                                            <input type="radio" name="status" value="1">
                                            Active
                                        </label>
                                    </div>

                                    <div class="radio" style="display: inline">
                                        <label>
                                            <input type="radio" name="status" value="0">
                                            Inactive
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
            </div>


            <div class="modal-footer">
                <button type="button" id="p" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>

    </div>
</div>



<script>
    $(document).ready(function() {
        $('#yourForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route("storeEstimateFloor") }}',
                data: $(this).serialize(),
                success: function(response) {

                    $('#successMessage').html(response.message).fadeIn().delay(3000).fadeOut();

                    $('#exampleModal').modal('hide');
                    location.reload();
                    // Handle success response
                },
                error: function(error) {
                    console.log(error);
                    // Handle error response
                }
            });
        });
    });
</script>

@endsection