
@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Category</h2>

                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <a href="{{ url('home') }}" class="btn btn-primary pull-middle pl-3">Back</a>
                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

                        <h4>Edit Products:

                            <a href="{{ route('add-category') }}" class="btn btn-primary pull-right mr-2">Add Category</a>
                        </h4>

                        <div class="card-body">



                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Type</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $cate )
                                    <tr>
                                        <th scope="row">{{ $cate->id}}</th>
                                        <td>{{ $cate->name }}</td>
                                        <td>{{ $cate->type }}</td>
{{--                                        <td>--}}
{{--                                            <img src="{{ asset('uploads/products/'.$product->file_path) }}" width="70px" height="70px" alt="Image">--}}
{{--                                        </td>--}}
                                        <td>
                                            <a href="{{url('/edit-cat/{id}' )}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ url('delete-category/'. $cate->id) }}" method="POST">
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




