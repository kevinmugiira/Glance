
@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Users</h2>



                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>User Entries:
                            <a href="{{ url('layouts.Admin') }}" class="btn fa fa-home btn-primary pull-right">Home</a>
                        </h4>

                        <div class="card-body">

                        <div class="row">
                            <form action="{{ url('registered-user') }}" method="GET">


                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select name="role_as" class="form-control">
                                                @if(isset($_GET['role_as']))
                                                    <option value="{{ $_GET['role_as'] }}">{{$_GET['role_as']}}</option>
                                                    <option value="user">Normal User</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="seller">Seller</option>

                                                @else
                                                    <option value="">Normal User</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="seller">Seller</option>

                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <div class="card-body">
                                        <h3>
                                            Users online:
                                            @php $u_total = "0"; @endphp
                                            2                                @foreach($users as $use)

                                                @php
                                                    if($use->isUserOnline())
                                                        {
                                                           $u_total =+ 1;
                                                        }
                                                @endphp
                                            @endforeach
                                            {{--                                Users online: {{ $u_total }}--}}
                                        </h3>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>




                            <table id="datatable1" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User FirstName</th>
                                    <th>User Lastname</th>
                                    <th>User Email</th>
                                    <th>Role</th>
                                    <th>Online/Offline</th>
                                    <th>Account Status</th>
                                    <th>Action</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $use )
                                    <tr>
                                        <th scope="row">{{ $use->id}}</th>
                                        <td>{{ $use->firstname }}</td>
                                        <td>{{ $use->lastname }}</td>
                                        <td>{{ $use->email }}</td>
                                        <td>{{ $use->role_as }}</td>
                                        <td>
                                            @if($use->isUserOnline())
                                                <label class="badge badge-success">Online</label>
                                            @else
                                                <label class="badge badge-warning">Offline</label>
                                            @endif
                                        </td>
                                        <td>
                                            @if($use->isban == '0')
                                                <label class="badge badge-primary" >Active</label>
                                                @elseif($use->isban == '1')
                                                <label class="badge badge-danger">Deactivated</label>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{url('role-edit/' . $use->id )}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ url('role-delete/'. $use->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="text-right">
{{--                                <h3>are you who you say u are?</h3>--}}
{{--                                {{  $users->links() }}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection


@section('myjsscripts')

<script>
    $(document).ready(function() {
        $('#datatable1').DataTable();
    } );
</script>

    @stop

