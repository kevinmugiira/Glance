

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Groups</h2>

                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Group Edit:
                            <a href="{{url('layouts.Admin')}}" class="btn fa fa-home btn-primary pull-right">Home</a>
                        </h4>
                        @if(Session('status'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-body">
                        <form action="{{ url('group-update/' . $group->id ) }}" method="POST">
                            @csrf

                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       id=""
                                       value="{{ $group->name }}"
                                       placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Custom Url (Slug)</label>
                                <input type="text"
                                       name="url"
                                       value="{{ $group->url }}"
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
                                          placeholder="Enter Description"> {{ $group->describe }}

                                </textarea>
                            </div>


                            <div class="checkbox">
                                <label>
                                    <input name="status"
                                           type="checkbox"
                                        {{ $group->status == '1' ? 'checked' : '' }}> Show / Hide </label>
                            </div>
                            <button type="submit" class="btn btn-info" >Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('footer')
@endsection

