

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Categories: </h2>



                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Category/Collections:
                            <a href="{{ url('layouts.Admin') }}" class=" fa fa-home btn btn-info pull-right">Home</a>
                        </h4>

                        <div class="card-body">

                            <div class="panel-body widget-shadow">
                                <h4>
                                    <a href="{{ url('category-add') }}" class="btn btn-info fa fa-plus-circle ml-5">Add a Category</a>
                                    <a href="{{ url('category-deleted-records') }}" class="btn btn-info ">Deleted Records</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Group Name</th>
                                        <th>Image</th>
                                        <th>Icon</th>
                                        <th>Show/Hide</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category as $categories)
                                        <tr>
                                            <th scope="row">{{ $categories->id }}</th>
                                            <td>{{ $categories->name }}</td>
                                            <td>{{ $categories->group->name }}</td>
                                            <td>
                                                <img src="{{asset('/uploads/categoryimage/'. $categories->image)}}" width="50px"/>
                                            </td>
                                            <td>
                                                <img src="{{asset('/uploads/categoryicon/'. $categories->icon)}}" width="50px"/>
                                            </td>
                                            <td>
                                                <input type="checkbox" {{ $categories->status == '1' ? 'checked' : '' }} >
                                            </td>
                                            <td>
                                                <a href="{{ url('category-edit/'. $categories->id) }}" class="badge badge-primary">Edit</a>
                                                <a href="{{ url('category-delete/'.$categories->id) }}" class="badge badge-danger" onclick="return confirm('Sure you want to Delete?')">Delete</a>
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

