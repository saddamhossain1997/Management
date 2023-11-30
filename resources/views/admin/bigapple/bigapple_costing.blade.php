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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Add Casting Configure</button>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $bigapples as $bigapple)
                                <tr>
                                    <td>{{$bigapple->date}}</td>
                                    <td>{{$bigapple->id}}</td>
                                    <td><a href="{{route('detailBig',$bigapple->id)}}">Details</a></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Casting Configure Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form id="yourForm" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Quantity:</label>
                                <input type="number" name="quantity" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">First Ratio:</label>
                                <input type="number" name="first_ratio" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Second Ratio:</label>
                                <input type="number" name="second_ratio" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Third Ratio:</label>
                                <input type="number" name="third_ratio" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Date:</label>
                                <input type="date" name="date" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Aggregate Cost(Cft):</label>
                                <input type="text" name="aggregate_cost_cft" class="form-control" id="recipient-name">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Cement Cost(Per Bag):</label>
                                <input type="text" name="cement_cost_per_bag" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sands Cost(Per Cft):</label>
                                <input type="text" name="sands_cost_per_cft" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Note:</label>
                                <textarea class="form-control" name="note" rows="4" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="p" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#yourForm').submit(function(e) {
            e.preventDefault();


            $.ajax({
                type: 'POST',
                url: '{{ route("storeBig") }}',
                data: $(this).serialize(),
                success: function(response) {


                    $('#successMessage').html(response.message).fadeIn().delay(3000).fadeOut();
                    $('#exampleModal').modal('hide');

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