@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Combine Bus</h4>
        <h6>Buses</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus 1</label>
                    <select class="select">
                        <option>Select Bus 1</option>
                        <option>Bus 1</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Bus 2</label>
                    <select class="select">
                        <option>Select Bus 2</option>
                        <option>Bus 2</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Select Years</label>
                    <select class="select">
                        <option>Select Bus</option>
                        <option>Bus 1</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Combine</a>
                <a href="{{ route('buses') }}" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection