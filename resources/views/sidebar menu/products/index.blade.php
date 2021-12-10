
@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Products</h2>

                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Edit Products:
                            <a href="{{ route('add-product') }}" class="btn btn-primary pull-right">Add Product</a>
                        </h4>

                        <div class="card-body">



                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Product Description</th>
                                        <th>Product Image</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prod as $product )
                                        <tr>
                                            <th scope="row">{{ $product ->id}}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/products/'.$product->file_path) }}" width="70px" height="70px" alt="Image">
                                            </td>
                                            <td>
                                                <a href="{{url('edit-prod/' . $product->id )}}" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ url('delete-product/'. $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('footer')
@endsection




