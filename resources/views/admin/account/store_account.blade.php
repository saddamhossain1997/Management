@extends('layouts.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title">Add Account Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{route('storeAccount')}}">
                        @csrf

                        <div class="card-body">
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Bank *</label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="bank" name="bank_id">

                                        <option value="">Select Bank</option>
                                        @foreach( $banks as $bank)
                                        <option value="{{$bank->id}}">{{ $bank->bank_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Branch *</label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="branch" name="branch_id">
                                        <option value="">Select Branch</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">account_name *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="account_name" value="">

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">account_no *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="account_no" value="">

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">account_code *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="account_code" value="">

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">account_description *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="account_description" value="">

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">opening_balance *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="account_opening_balance" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Status *</label>

                                <div class="col-sm-10">

                                    <div class="radio" style="display: inline">
                                        <label>
                                            <input type="radio" name="account_status" value="1">
                                            Active
                                        </label>
                                    </div>

                                    <div class="radio" style="display: inline">
                                        <label>
                                            <input type="radio" name="account_status" value="0">
                                            Inactive
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
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
        $('#bank').change(function() {
            var bankId = $(this).val();

            $.ajax({
                url: "/get-branches/" + bankId,
                type: "GET",
                dataType: "Json",
                success: function(data) {
                    var branchesSelect = $('#branch');
                    branchesSelect.empty();
                    $.each(data, function(index, branch) {
                        branchesSelect.append(`<option value="${branch.id}"> ${branch.branch_name}</option>`);
                    });
                }
            });
        });
    });
</script>

@endsection