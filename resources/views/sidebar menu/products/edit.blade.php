@extends('layouts.app')




@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Category</h2>


                <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                    <h4>List:</h4>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Category Type</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Food Crop</td>
                            <td>Cereal</td>
                            <td><a href="{{route('update-product')}}"><span class="label label-warning">Edit</span></a></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Food Crop</td>
                            <td>Vegetable</td>
                            <td><a href="{{route('update-product')}}"><span class="label label-warning">Edit</span></a></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cash Crop</td>
                            <td>Cereal</td>
                            <td><a href="{{route('update-product')}}"><span class="label label-warning">Edit</span></a></td>

                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @include('footer')
@stop
