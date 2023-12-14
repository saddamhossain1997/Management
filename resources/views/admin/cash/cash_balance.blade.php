@extends('layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title"> Cash Information </h3>
                        <div id="successMessage" style="display: none; color:blue; text-align:end">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" id="yourForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label"> Balance <span style="color: red">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{  $cash }}" placeholder="Balance" id="amount" name="amount" disabled="">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label"> Opening Balance <span style="color: red">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" id="cashInput" class="form-control" placeholder="Opening Balance" name="cash">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<script>
    $(document).ready(function() {
        $('#yourForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route("storeCash") }}',
                data: $(this).serialize(),
                success: function(response) {
                    cashDataShow();
                    $('#successMessage').html(response.message).fadeIn().delay(3000).fadeOut();
                    $('#cashInput').val('');
                    // Handle success response
                },
                error: function(error) {
                    console.log(error);
                    // Handle error response
                }
            });
        });
    });

    function cashDataShow() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route("cash") }}',
            success: function(response) {
                $('#amount').val(response);
            },

        });
    }
</script>

@endsection