@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <body class="cbp-spmenu-push">
    <div class="main-content">

        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1">Category</h2>


                    <div class="form-two widget-shadow">
                        <div class="form-title">
                            <h4>Delete Category :</h4>
                        </div>
                        <div class="form-body" data-example-id="simple-form-inline">
                            <form class="form-inline">
                                <div class="form-group">
                                    <!--<label for="exampleInputName2">Name</label> -->
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <!--<label for="exampleInputEmail2">Email</label> -->
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Category type">
                                </div>
                                <button type="submit" class="btn btn-default">Delete</button>
                            </form>
                        </div>
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
