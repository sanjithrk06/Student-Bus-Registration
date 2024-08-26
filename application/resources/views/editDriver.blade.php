@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Edit Driver</h4>
        <h6>Drivers</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Driver ID</label>
                    <input type="text" placeholder="Enter Driver ID">
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
                    <label>Bus No.</label>
                    <input type="text" placeholder="Enter Bus No.">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus Route</label>
                    <input type="text" placeholder="Enter Bus Route">
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Edit</a>
                <a href="{{ route('drivers') }}" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection