@extends('layouts.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header with-border">
                        <h3 class="card-title">Bricks Configure Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('storeBricksExtra')}}">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Floor Quantity</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="floor_number" name="FloorQuantity">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Brick Size</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="BrickSize" name="BrickSize">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Morter</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="mortar" name="mortar" readonly="">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Dry Morter</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="DryMortar" name="DryMortar" placeholder="Dry Morter">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>First Ratio</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="FirstRatio" name="FirstRatio" value="" placeholder="First Ratio">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Second Ratio</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" id="SecondRatio" name="SecondRatio" placeholder="Second Ratio">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label>Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">

                                            </div>
                                            <input type="date" class="form-control pull-right" id="date" name="date">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group ">
                                        <label>Note</label>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="note" name="note">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>
                            </div>

                            <u><i>
                                    <h3>Costing Area</h3>
                                </i></u>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Bricks Cost(Per Pcs)</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" name="BricksCostPerPcs" placeholder="Enter Bricks Costing">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label>Cement Cost(Per Bag)</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" name="CementCostPerBag" placeholder="Enter Per Bag Cement Costing">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label>Sands Cost(Per Cft)</label>

                                        <div class="form-group">
                                            <input type="number" class="form-control" name="SandsCostPerCft" placeholder="Enter Per Cft Sands Costing">
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Total Square Feet</th>
                                            <th>Thickness</th>
                                            <th>Total Bricks</th>
                                            <th>Total Morters</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody id="TBody">

                                        <tr id="TRow" class="d-none">
                                            <td>
                                                <input type="number" step="any" class="form-control square_feet" onchange="inputClaculator(this)" name="square_feet[]">
                                            </td>
                                            <td>
                                                <input type="number" onchange="inputClaculator(this)" class="form-control thickness" name="thickness[]">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control thickness" id="getValues" name="total_bricks[]">
                                            </td>
                                            <td class="sub-total-morter">0.00</td>
                                            <td class="text-center">
                                                <a role="button" onclick="ramoveData(this)" class="btn btn-danger btn-sm btn-remove">X</a>
                                            </td>
                                        </tr>



                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" onclick="addMore()">Add More</button>
                                            </td>
                                            <th class="text-right">Get Total Bricks</th>
                                            <th id="total-bricks"> <input type="number" placeholder="0.00" class="form-control thickness" name="getTotal" id="getTotal"></th>
                                            <th id="total-morters">h</th>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->

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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function addMore() {
        var v = $("#TRow").clone().appendTo("#TBody");
        v.find("input").val("");
        v.removeClass("d-none");

    }

    function ramoveData(v) {
        $(v).parent().parent().remove();

    }

    function inputClaculator(v) {
        var index = $(v).parent().parent().index();


        var qty = document.getElementsByName("square_feet[]")[index].value;
        var price = document.getElementsByName("thickness[]")[index].value;
        var total = qty * price;
        document.getElementsByName("total_bricks[]")[index].value = total;

        GetTotal();
    }

    function GetTotal() {

        var sum = 0;
        var amounts = document.getElementsByName("total_bricks[]");
        for (let index = 0; index < amounts.length; index++) {

            var amt = amounts[index].value;
            sum = +(sum) + +(amt);

        }
        document.getElementById("getTotal").value = sum;

    }
</script>

@endsection