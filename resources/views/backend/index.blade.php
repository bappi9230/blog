@extends('dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Admin</h4>

                </div>
            </div>
        </div> <!-- end page title -->
        <div class="row">
            <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Book</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- end settings content-->


                        </div>
                        <div class="col-4" style="margin-left:50%">
                            <div class="input-group mb-3">
                               <h1>Total= </h1> <input style="border: 0px solid;" class="h3 me-2" id="total"></input>
                            </div>
                        </div>

                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->
    </div> <!-- container -->

</div> <!-- content -->
@endsection
