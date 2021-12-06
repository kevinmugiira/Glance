
@extends('layouts.app')



@section('content')

    @include('dashboard-header')


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
                                <form action="/category/create" method="POST" class="form-horizontal">

                                    @csrf

                                    <div class="form-group">

                                        <label for="mediuminput" class="col-sm-2 control-label">Category Name</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control1 @error('name') list-group-item-danger @enderror"
                                                   name="name"
                                                   placeholder="Category Name">

                                            @error('name')
                                               <p class="help list-group-item-danger">{{ $errors->first('name') }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mediuminput" class="col-sm-2 control-label">Category Type</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control1 @error('type') list-group-item-danger @enderror"
                                                   name="type"
                                                   placeholder="Category Type">

                                            @error('type')
                                                <p class="help list-group-item-danger">{{ $errors->first('type') }}</p>
                                            @enderror
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

    @include('footer')
@endsection
