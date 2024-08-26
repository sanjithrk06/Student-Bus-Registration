@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Add Student</h4>
        <h6>Students</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" placeholder="Enter Student ID">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Year</label>
                    <input type="text" placeholder="Enter Year">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" placeholder="Enter Student Name">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Roll No.</label>
                    <input type="text" placeholder="Enter Roll No.">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus No.</label>
                    <input type="text" placeholder="Enter Bus No.">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus Stop</label>
                    <input type="text" placeholder="Enter Bus Stop">
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Add</a>
                <a href="{{ route('students') }}" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection