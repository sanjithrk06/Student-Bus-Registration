@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das3">
            <div class="dash-counts">
                <h4>13</h4>
                <h5>Buses</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="truck"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das2">
            <div class="dash-counts">
                <h4>18</h4>
                <h5>Drivers</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="user-plus"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count">
            <div class="dash-counts">
                <h4>1542</h4>
                <h5>Students</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="users"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das1">
            <div class="dash-counts">
                <h4>84</h4>
                <h5>Faculty</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="user"></i>
            </div>
        </div>
    </div>
</div>

<div class="card mb-0">
    <div class="card-body">
        <h4 class="card-title">Daily Bus Status</h4>
        <div class="table-responsive dataview">
            <table class="table  datanew">
                <thead>
                    <tr>
                        <th>Bus No.</th>
                        <th>Driver Name</th>
                        <th>Contact Number</th>
                        <th>Stops Count</th>
                        <th>Bus Route</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>11</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Erode</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kumar</td>
                        <td>9876543210</td>
                        <td>12</td>
                        <td>Bhavani</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection