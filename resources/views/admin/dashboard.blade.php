@extends('admin.admin-main')
@section('admin-main-container')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="app">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=completed">Completed
                                    Order</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=processing">Processing
                                    Order</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-primary text-center">
                            <h1 class="font-light text-white">1</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=pending">Pending
                                    Order</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=rejected">Rejected
                                    Order</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=paid">Paid Order</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">1</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=unpaid">Unpaid
                                    Order</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=completed_today">Completed
                                    (Today)</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=processing_today">Processing
                                    (Today)</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-primary text-center">
                            <h1 class="font-light text-white">1</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=pending_today">Pending
                                    (Today)</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=rejected_today">Rejected
                                    (Today)</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">0</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=paid_today">Paid
                                    (Today)</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">1</h1>
                            <h6 class="text-white"><a
                                    href="#/reports/order?search_type=unpaid_today">Unpaid
                                    (Today)</a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Most Ordered Products</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Canon Pixma G2010 Ink Tank All-In-One Printer Ink Tank All-In-One Printer</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Most Ordered Brands</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">No. of Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CANON</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Most Ordered Categories</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">No. of Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Printer</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Most Ordered (Completed) Area</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Area Name</th>
                                    <th scope="col">No. of Order</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Most Ordered (Rejected) Area</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Area Name</th>
                                    <th scope="col">No. of Order</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
    @endsection
