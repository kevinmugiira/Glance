
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
                        <h4>Edit Products:
                            <a href="{{ url('layouts.Admin') }}" class="btn btn-primary pull-right">Home</a>
                        </h4>

                        <div class="card-body">



                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User FirstName</th>
                                    <th>User Lastname</th>
                                    <th>User Email</th>
                                    <th>Role</th>
                                    <th>Ban/unBan</th>
                                    <th>Action</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $users )
                                    <tr>
                                        <th scope="row">{{ $users->id}}</th>
                                        <td>{{ $users->firstname }}</td>
                                        <td>{{ $users->lastname }}</td>
                                        <td>{{ $users->email }}</td>
                                        <td>{{ $users->role_as }}</td>
                                        <td>
                                            @if($users->isban == '0')
                                                <label class="badge badge-primary" >Active</label>
                                                @elseif($users->isban == '1')
                                                <label class="badge badge-danger">Deactivated</label>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{url('role-edit/' . $users->id )}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ url('role-delete/'. $users->id) }}" method="POST">
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




