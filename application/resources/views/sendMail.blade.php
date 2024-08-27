@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Mail</h4>
        <h6>Send Mail</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>From</label>
                    <select class="select">
                        <option>Select Email</option>
                        <option>Email</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>To</label>
                    <select class="select">
                        <option>Select Email</option>
                        <option>Email</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>CC</label>
                    <input type="text" placeholder="Enter CC Email ID">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" placeholder="Enter Subject">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" placeholder="Enter Subject"></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Send</a>
                <a href="javascript:void(0);" class="btn btn-cancel">Reset</a>
            </div>
        </div>
    </div>
</div>
@endsection