@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Buses</h4>
        <h6>Manage Bus List</h6>
    </div>
    <div class="page-btn">
        <a href="{{ route('addBus') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                class="me-1">Add New Bus</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-top">
            <div class="search-set">
                <div class="search-input">
                    <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                            alt="img"></a>
                </div>
            </div>
            <div class="wordset">
                <ul>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                src="assets/img/icons/pdf.svg" alt="img"></a>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                src="assets/img/icons/excel.svg" alt="img"></a>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                src="assets/img/icons/printer.svg" alt="img"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card mb-0" id="filter_inputs">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Choose Product</option>
                                        <option>Macbook pro</option>
                                        <option>Orange</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                        <option>Fruits</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Choose Sub Category</option>
                                        <option>Computer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Brand</option>
                                        <option>N/D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12 ">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Price</option>
                                        <option>150.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="assets/img/icons/search-whites.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table  datanew">
                <thead>
                    <tr>
                        <th>Bus ID</th>
                        <th>Bus No.</th>
                        <th>Driver Name</th>
                        <th>Contact Number</th>
                        <th>Stops Count</th>
                        <th>Bus Route</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BID001</td>
                        <td>6</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>11</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID002</td>
                        <td>3</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID003</td>
                        <td>2</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID004</td>
                        <td>7</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID005</td>
                        <td>10</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Erode</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID006</td>
                        <td>8</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID007</td>
                        <td>9</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID008</td>
                        <td>12</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID009</td>
                        <td>11</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID0010</td>
                        <td>1</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>BID0011</td>
                        <td>2</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                        <td>
                            <a class="me-3" href="{{ route('editBus') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
