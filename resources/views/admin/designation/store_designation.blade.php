@extends('layouts.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title">designation Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{route('storeDesignation')}}">
                        @csrf

                        <div class="card-body">
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Department *</label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="department_id">

                                        <option value="">Select Department</option>
                                        @foreach( $departments as $department)
                                        <option value="{{$department->id}}">{{ $department->department_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Name *</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="designation_name" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Status *</label>

                                <div class="col-sm-10">

                                    <div class="radio" style="display: inline">
                                        <label>
                                            <input type="radio" name="designation_status" value="1">
                                            Active
                                        </label>
                                    </div>

                                    <div class="radio" style="display: inline">
                                        <label>
                                            <input type="radio" name="designation_status" value="0">
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


@endsection