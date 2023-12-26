@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title">Employee Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">

                        <div class="card-body">
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Name <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="">

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Sort </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Sort" name="sort" value="">

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Employee ID <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Employee ID" name="employee_id" value="0012" readonly="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Date of Birth </label>

                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <div class="input-group-addon">

                                        </div>
                                        <input type="date" class="form-control pull-right" id="dob" name="date_of_birth" value="" autocomplete="off">
                                    </div>
                                    <!-- /.input group -->

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Joining Date </label>

                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <div class="input-group-addon">

                                        </div>
                                        <input type="date" class="form-control pull-right date-picker" name="joining_date" value="" autocomplete="off">
                                    </div>
                                    <!-- /.input group -->

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Confirmation Date </label>

                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <div class="input-group-addon">

                                        </div>
                                        <input type="date" class="form-control pull-right date-picker" name="confirmation_date" value="" autocomplete="off">
                                    </div>
                                    <!-- /.input group -->

                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Department <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="department" id="department">
                                        <option value="">Select Department</option>
                                        @foreach( $departments as $department)
                                        <option value="{{$department->id}}">{{$department->department_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Designation <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="designation" id="designation">
                                        <option value="">Select Designation</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Education Qualification </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Education Qualification" name="education_qualification" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Employee Type <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="employee_type">
                                        <option value="">Select Employee Type</option>
                                        <option value="1">Permanent</option>
                                        <option value="2">Temporary</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Reporting To </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Reporting To" name="reporting_to" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Gender <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="2">Others</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Marital Status <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="marital_status">
                                        <option value="">Select Marital Status</option>
                                        <option value="1">Single</option>
                                        <option value="2">Married</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Mobile No. </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Mobile No." name="mobile_no" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Father Name </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Father Name" name="father_name" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Mother Name </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Mother Name" name="mother_name" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Emergency Contact <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Emergency Contact" name="emergency_contact" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">NID Image <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="nid_img">

                                </div>
                            </div>



                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Signature </label>

                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="signature">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Photo </label>

                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="photo">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Present Address <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Present Address" name="present_address" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Permanent Address <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Permanent Address" name="permanent_address" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Email <span class="text-danger">*</span> </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Religion <span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="religion">
                                        <option value="">Select Religion</option>
                                        <option value="1">Muslim</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="4">Other</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">CV</label>

                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="cv">

                                </div>
                            </div>


                            <div id="salary">
                                <div class="form-group row ">
                                    <label class="col-sm-2 control-label">Previous Salary </label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Previous Salary" name="previous_salary" value="">

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-2 control-label">Gross Salary <span class="text-danger">*</span></label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Gross Salary" name="gross_salary" value="">

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-2 control-label">Bank Name </label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Bank Name" name="bank_name" value="">

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-2 control-label">Bank Branch </label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Bank Branch" name="bank_branch" value="">

                                    </div>
                                </div>


                                <div class="form-group row ">
                                    <label class="col-sm-2 control-label">Bank Account </label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Bank Account" name="bank_account" value="">

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
        $('#department').change(function() {
            var bankId = $(this).val();
            $.ajax({
                url: "/get-employee/" + bankId,
                type: "GET",
                dataType: "Json",
                success: function(data) {
                    var branchesSelect = $('#designation');
                    branchesSelect.empty();
                    $.each(data, function(index, designation) {
                        branchesSelect.append(`<option value="${designation.id}"> ${designation.designation_name}</option>`);
                    });
                }
            });
        });
    });
</script>

@endsection