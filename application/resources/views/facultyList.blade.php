@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Faculties</h4>
        <h6>Manage Faculty List</h6>
    </div>
    <div class="page-btn">
        <a href="addproduct.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                class="me-1">Add New Faculty</a>
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
                        <th>Faculty ID</th>
                        <th>Name</th>
                        <th>Roll No.</th>
                        <th>Student Name</th>
                        <th>Bus No.</th>
                        <th>Bus Stop</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PT001</td>
                        <td>Computers</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Macbook pro</a>
                        </td>
                        <td>1500.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT002</td>
                        <td>Fruits</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Orange</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT003</td>
                        <td>Fruits</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Pineapple</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT004</td>
                        <td>Fruits</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Strawberry</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT005</td>
                        <td>Accessories</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Avocat</a>
                        </td>
                        <td>10.00</td>
                        <td>150.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT006</td>
                        <td>Shoes</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Macbook Pro</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT007</td>
                        <td>Shoes</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Apple Earpods</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT008</td>
                        <td>Fruits</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">iPhone 11 </a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT009</td>
                        <td>Earphones</td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">samsung </a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT0010</td>
                        <td>Health Care </td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Banana</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>PT0011</td>
                        <td>Health Care </td>
                        <td>N/D</td>
                        <td class="productimgname">
                            <a href="javascript:void(0);">Limon</a>
                        </td>
                        <td>10.00</td>
                        <td>100.00</td>
                        <td>
                            <a class="me-3" href="product-details.html">
                                <img src="assets/img/icons/eye.svg" alt="img">
                            </a>
                            <a class="me-3" href="{{ route('editStudent') }}">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
