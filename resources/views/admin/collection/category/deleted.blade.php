

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
                                    Category Deleted Records:
                                </h4>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Show/Hide</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category as $categories)
                                        <tr>
                                            <th scope="row">{{ $categories->id }}</th>
                                            <td>{{ $categories->name }}</td>
                                            <td>{{ $categories->description }}</td>
                                            <td>
                                                <input type="checkbox" {{ $categories->status == '1' ? 'checked' : '' }} >
                                            </td>
                                            <td>
                                                <a href="{{ url('category-re-store/'. $categories->id) }}" class="badge badge-primary">Re-store</a>

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

