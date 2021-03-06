

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Categories</h2>

                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <a href="{{ url('home') }}" class="btn btn-primary pull-middle pl-3">Back</a>

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Edit Categories:

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
                                @foreach($cat as $category )
                                    <tr>
                                        <th scope="row">{{ $category->id}}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->type }}</td>



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





