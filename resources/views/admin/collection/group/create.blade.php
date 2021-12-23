

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Groups</h2>

                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Add group :
                            <a href="{{url('layouts.Admin')}}" class=" btn fa fa-home btn-primary pull-right">Home</a>
                        </h4>
                        @if(Session('status'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-body">
                        <form action="{{ url('group-store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       id=""
                                       placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Custom Url (Slug)</label>
                                <input type="text"
                                       name="url"
                                       class="form-control"
                                       id=""
                                       placeholder="Enter Url">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea rows="4"
                                          name="describe"
                                          class="form-control"
                                          id=""
                                          placeholder="Enter Description">

                                </textarea>
                            </div>


                            <div class="checkbox">
                                <label>
                                    <input name="status"
                                           type="checkbox"> Show / Hide </label>
                            </div>
                            <button type="submit" class="btn btn-default">Save</button>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>



    @include('footer')
@endsection

