@extends('layouts.master')
@section('content')

<h1>fknfkfg</h1>

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





@endsection