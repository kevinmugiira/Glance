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
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Category Type</th>

                        </tr>
                        </thead>


                        <tbody>
                        @foreach($cat as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->type }}</td>

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
