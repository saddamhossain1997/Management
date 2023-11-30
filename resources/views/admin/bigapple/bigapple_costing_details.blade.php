@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12 text-right">

                            </div>
                        </div>
                        <div id="prinarea">
                            <div class="img-overlay">
                            </div>
                            <div class="row">
                                <div class="col-xs-4 text-left">
                                    <div class="logo-area-report">
                                        <button id="myButton" class="btn btn-success">Print </button>
                                    </div>
                                </div>
                                <div class="col-xs-8 text-center">
                                    <h2>BigApple LTD</h2>
                                    <h4>Nargis Gardern,House-04,Road-07,Block-E,Sec-01,Kaderabad Housing,Mohammadpur,Dhaka-1207</h4>
                                    <h4>Mobile : 01776-88 88 88</h4>
                                    <h4>Email : Info@babl.com.bd</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Casting Configure No.</th>
                                                <td>00001</td>
                                            </tr>
                                            <tr>
                                                <th>Casting Configure Date</th>
                                                <td>2023-04-03</td>
                                            </tr>
                                            <tr>
                                                <th>Total Cement</th>
                                                <td>1.71 Bag</td>
                                            </tr>
                                            <tr>
                                                <th>Total Sands</th>
                                                <td>4.29 Cft</td>
                                            </tr>
                                            <tr>
                                                <th>Total Aggregate</th>
                                                <td>8.57 Cft</td>
                                            </tr>

                                            <tr>
                                                <th>Note </th>
                                                <td>{{$details->note}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th colspan="2" class="text-center">Casting Info</th>
                                            </tr>
                                            <tr>
                                                <th>Casting Quantity</th>
                                                <td>{{$details->quantity}}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <u><i>
                                    <h2>Costing Area</h2>
                                </i></u>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <tbody>


                                            <tr>
                                                <th>Cement Price(Bag)</th>
                                                <td>৳ {{$details->cement_cost_per_bag}}Taka </td>
                                            </tr>
                                            <tr>
                                                <th>Sands Price (Cft)</th>
                                                <td>৳ {{$details->sands_cost_per_cft}} Taka </td>
                                            </tr>

                                            <tr>
                                                <th>Aggregate Price (Cft)</th>
                                                <td>৳ {{$details->aggregate_cost_cft}} Taka </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Attach a click event handler to the button
        $("#myButton").click(function() {
            $("#myButton").hide();
            $(this).animate({
                opacity: 0.25,
                left: "+=50",
            }, 1000, function() {
                // This function will be executed after the animation is complete
                window.print();
            });
        });
    });
</script>
@endsection