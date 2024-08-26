@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Edit Bus</h4>
        <h6>Buses</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus ID</label>
                    <input type="text" placeholder="Enter Bus ID">
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
                    <label>Driver Name</label>
                    <input type="text" placeholder="Enter Driver Name">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" placeholder="Enter Contact Number">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Stops Count</label>
                    <input type="text" placeholder="Enter Stops Count">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus Route</label>
                    <input type="text" placeholder="Enter Bus Route">
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                <a href="{{ route('buses') }}" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection