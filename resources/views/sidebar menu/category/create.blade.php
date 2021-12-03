
@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <body class="cbp-spmenu-push">
    <div class="main-content">

        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1">CATEGORY</h2>

                    <div class=" form-grids row form-grids-right">
                        <div class="widget-shadow " data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>ADD Category :</h4>
                            </div>
                            <div class="form-body">
                                <form class="form-horizontal">


                                    <div class="form-group">
                                        <label for="mediuminput" class="col-sm-2 control-label">Category Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" id="mediuminput" placeholder="Category Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mediuminput" class="col-sm-2 control-label">Category Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" id="mediuminput" placeholder="Category Type">
                                        </div>
                                    </div>


                                    <div class="col-sm-offset-2">
                                        <button type="submit" class="btn btn-default">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>

    @include('footer')
@endsection
