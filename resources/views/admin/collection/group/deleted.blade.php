

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Groups: </h2>



                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Group/Collections:
                            <a href="{{ url('layouts.Admin') }}" class=" fa fa-home btn btn-info pull-right">Home</a>
                        </h4>

                        <div class="card-body">

                            <div class="panel-body widget-shadow">
                                <h4>
                                    Group Deleted Records:
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
                                    @foreach($groups as $group)
                                        <tr>
                                            <th scope="row">{{ $group->id }}</th>
                                            <td>{{ $group->name }}</td>
                                            <td>{{ $group->describe }}</td>
                                            <td>
                                                <input type="checkbox" {{ $group->status == '1' ? 'checked' : '' }} >
                                            </td>
                                            <td>
                                                <a href="{{ url('group-re-store/'. $group->id) }}" class="badge badge-primary">Re-store</a>

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

