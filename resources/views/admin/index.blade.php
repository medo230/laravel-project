@extends('admin.layout.layout')

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Admin Dashboard</h2>
                    <h5>Welcome {{Auth::user()->name}} , Love to see you back. </h5>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />


            <div class="row">



                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-green col-md-3">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>120 GB </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            Disk Space Available

                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder bg-color-red col-md-3">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3>20,000 </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Articles Pending

                        </div>
                    </div>
                </div>

            </div>


            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
