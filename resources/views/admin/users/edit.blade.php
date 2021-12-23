
@extends('layouts.app')



@section('content')
    @include('dashboard-header')




    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <h2 class="title1">Current Role: {{$user_roles->role_as}}</h2>

                Account Status:
            @if($user_roles->isban == '0')
                    <label class="badge badge-primary" >Active</label>
                @elseif($user_roles->isban == '1')
                    <label class="badge badge-danger">Deactivated</label>
                @endif

                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        @if(Session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <h4>Roles Edit :
                        <a href="{{ url('layouts.Admin') }}" class="btn btn-primary pull-right">Home</a>
                        </h4>
                    </div>
                    <div class="form-body">
                        <form action="{{ url('role-update/'. $user_roles->id) }}" method="POST">

                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="exampleInputName1">Firstname</label>
                                <input type="text"
                                       name="firstname"
                                       class="form-control"
                                       value="{{ $user_roles->firstname }}"
                                       placeholder="Edit Firstname">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Lastname</label>
                                <input type="text"
                                       name="lastname"
                                       class="form-control"
                                       value="{{ $user_roles->lastname }}"
                                       placeholder="Update Lastname">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1" readonly="" >Edit Email</label>
                                <input type="text"
                                       name="email"
                                       class="form-control"
                                       value="{{ $user_roles->email }}"
                                       placeholder="Edit Email">
                            </div>


                            <div class="form-group">
                                <label for="selector1" class="col-sm-2 control-label">Roles</label>
                                <div class="col-sm-8"><select name="role_as" id="selector1" class="form-control1">
                                        <option value="">--Select--</option>
                                        <option value="admin">Admin</option>
                                        <option value="seller">Seller</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="form-group">
                                <label for="selector1" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-8"><select name="isban" id="selector1" class="form-control1">
                                        <option value="">--Select Activate or Deactivate--</option>
                                        <option value="0">Activate</option>
                                        <option value="1">Deactivate</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            </div>


                            <div class="form-group">
                            <!--<a href="#"><span class="label label-success">Success</span></a>-->
                            <button type="submit"  class="btn btn-default ">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </body>

    @include('footer')

@endsection
