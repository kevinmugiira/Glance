@extends('layouts.app')




@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Products</h2>


                <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                    <h4>List:
                        <a href="{{ url('home') }}" class="btn btn-primary pull-right"> Back</a>
                    </h4>
                    <table class="table table-hover">
                        <thead>


                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product Description</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prod as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>


                        </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @include('footer')
@stop
