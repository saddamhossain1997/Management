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
                                <a target="_blank" href="" class="btn btn-primary">Print</a>
                            </div>
                        </div>
                        <div id="prinarea">
                            <div class="img-overlay">
                                <img src="">
                            </div>
                            <div class="row">
                                <div class="col-xs-4 text-left">
                                    <div class="logo-area-report">
                                        <img width="35%" src="">
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
                                                <th>Bricks Configure No.</th>
                                                <td>{{ $details->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Bricks Configure Date</th>
                                                <td>{{ $details->date}}</td>
                                            </tr>
                                            <tr>
                                                <th>Floor Quantity</th>
                                                <td>{{ $details->FloorQuantity}}</td>
                                            </tr>
                                            <tr>
                                                <th>Total Cement</th>
                                                <td>1 Cft</td>
                                            </tr>
                                            <tr>
                                                <th>Total Cement</th>
                                                <td>0.8 Bag</td>
                                            </tr>
                                            <tr>
                                                <th>Total Sands</th>
                                                <td>3.99 Cft</td>
                                            </tr>
                                            <tr>
                                                <th>Note </th>
                                                <td>Note for testing</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th colspan="2" class="text-center">Bricks Info</th>
                                            </tr>
                                            <tr>
                                                <th>Ratio</th>
                                                <td>1:4</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Square Feet</th>
                                                <th>Sub Total Area</th>
                                                <th>Sub Total Bricks</th>
                                                <th>Sub Total Morters</th>
                                                <th>Sub Total Cement</th>
                                                <th>Sub Total Sands</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> {{ $details->TotalSquareFeet}}</td>
                                                <td> 30.00</td>
                                                <td> 144.58</td>
                                                <td> 4.99</td>
                                                <td> 1.00</td>
                                                <td> 3.99</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <th class="text-right" colspan="2">Total</th>
                                                <td> 144.58 Pcs</td>
                                                <td> 4.99 Cft</td>
                                                <td> 1.00 Cft</td>
                                                <td> 3.99 Cft</td>
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
                                                <th class="text-center">Bricks Price (Pcs)</th>
                                                <th class="text-center">Cement Price(Bag)</th>
                                                <th class="text-center">Sands Price (Cft)</th>
                                            </tr>
                                            <tr>
                                                <td class="text-center">৳ 1445.78 Taka</td>
                                                <td class="text-center">৳ 439.19 Taka</td>
                                                <td class="text-center">৳ 79.85 Taka</td>
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