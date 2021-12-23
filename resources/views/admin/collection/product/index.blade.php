

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Products: </h2>



                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Product/Collections:
                            <a href="{{ url('layouts.Admin') }}" class=" fa fa-home btn btn-info pull-right"></a>
                        </h4>

                        <div class="card-body">

                            <div class="panel-body widget-shadow">
                                <h4>
                                    <a href="{{ url('product-add') }}" class="btn btn-info fa fa-plus-circle ml-5">Add a Product</a>
                                    <a href="{{ url('product-deleted-records') }}" class="btn btn-info ">Deleted Records</a>
                                </h4>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Sub-Category Name</th>
                                        <th>Image</th>
                                        <th>Show/Hide</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product as $group)
                                        <tr>
                                            <th scope="row">{{ $group->id }}</th>
                                            <td>{{ $group->name }}</td>
                                            <td>{{ $group->subcategory->name }}</td>
                                            <td><img src="{{ asset('uploads/products/'. $group->image) }}" alt="Product Image" width="50px" height="50px"> </td>
                                            <td>
                                                <input type="checkbox" {{ $group->status == '1' ? 'checked' : '' }} >
                                            </td>
                                            <td>
                                                <a href="{{ url('product-edit/'. $group->id) }}" class="badge badge-primary">Edit</a>
                                                <a href="{{ url('product-delete/'.$group->id) }}" class="badge badge-danger" onclick="return confirm('Sure Want to Delete?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('footer')
@endsection

