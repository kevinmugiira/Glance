

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Orders: </h2>



                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>My Orders:
                            <a href="{{ url('layouts.Admin') }}" class=" fa fa-home btn btn-info pull-right">Home</a>
                        </h4>

                        <div class="card-body">

                            <div class="panel-body widget-shadow">
                                <h4>

                                </h4>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tracking No</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $categories)
                                        <tr>
                                            <th scope="row">{{ $categories->id }}</th>
                                            <td>{{ $categories->tracking_no }}</td>
                                            <td>{{ $categories->users->lastname }}</td>
                                            <td>{{ $categories->users->phone }}</td>
                                            <td>
                                                @if($categories->order_status == '0')
                                                    pending
                                                @else
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('order-view/'. $categories->id) }}" class="btn btn-info">View</a>
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

