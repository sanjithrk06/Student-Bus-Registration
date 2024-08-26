@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Register Bus</h4>
        <h6>Buses</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Route</label>
                    <select class="select">
                        <option>Select Email</option>
                        <option>Email</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus Stop</label>
                    <select class="select">
                        <option>Select Email</option>
                        <option>Email</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Register</a>
                <a href="{{ route('dashboard') }}" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection