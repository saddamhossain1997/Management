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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Add Bricks Configure</button>
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
                                @foreach ( $bricks as $brick)
                                <tr>
                                    <td>{{$brick->date}}</td>
                                    <td>{{$brick->id}}</td>
                                    <td>{{$brick->TotalBricks}}</td>
                                    <td>{{$brick->DryMortar}}</td>
                                    <td><a href="{{route('detailBricks',$brick->id)}}">Details</a></td>
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
                                <input type="number" name="FloorQuantity" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">BrickSize:</label>
                                <input type="number" name="BrickSize" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Mortar:</label>
                                <input type="number" name="Mortar" placeholder="20.50" readonly class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">DryMortar:</label>
                                <input type="number" name="DryMortar" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Date:</label>
                                <input type="date" name="date" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">FirstRatio:</label>
                                <input type="text" name="FirstRatio" class="form-control" id="recipient-name">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">SecondRatio:</label>
                                <input type="text" name="SecondRatio" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">BricksCostPerPcs:</label>
                                <input type="text" name="BricksCostPerPcs" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">CementCostPerBag:</label>
                                <input type="text" name="CementCostPerBag" class="form-control" id="recipient-name">
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">SandsCostPerCft:</label>
                                <input type="text" name="SandsCostPerCft" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">TotalSquareFeet:</label>
                                <input type="text" name="TotalSquareFeet" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">TotalBricks:</label>
                                <input type="text" name="TotalBricks" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Thickness:</label>
                                <input type="text" name="Thickness" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">TotalMortars:</label>
                                <input type="text" name="TotalMortars" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Note:</label>
                                <textarea class="form-control" name="note" rows="4" id="message-text"></textarea>
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
                url: '{{ route("storeBricks") }}',
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