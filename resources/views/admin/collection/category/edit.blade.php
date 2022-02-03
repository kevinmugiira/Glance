

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Edit Categories Collection Form</h2>

                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Edit a Category :
                            <a href="{{url('layouts.Admin')}}" class="btn fa fa-home btn-primary pull-right"></a>
                        </h4>
                        @if(Session('status'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-body">
                        <form action="{{ url('category-update/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Group (Name)</label>
                                    <select name="group_id" class="form-control" id="exampleInputEmail1">
                                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                        @foreach($group as $groups)
                                            <option value="{{ $groups->id }}" >{{ $groups->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           value="{{$category->name}}"
                                           placeholder="Name">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Custom Url (Slug)</label>
                                    <input type="text"
                                           name="url"
                                           class="form-control"
                                           value="{{ $category->url }}"
                                           placeholder="Enter Url">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Enter Description</label>
                                    <textarea rows="4"
                                              name="description"
                                              class="form-control"
                                              placeholder="Enter Description"> {{$category->description}}
                                </textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"> Image</label>
                                    <input type="file" name="category_img" >
                                    <img src="{{ asset('uploads/categoryimage/'.$category->image) }}" width="50px">
                                    <p class="help-block">Your Category Image goes here.</p>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">ICON</label>
                                <input type="file" name="category_icon" >
                                <img src="{{ asset('uploads/categoryicon/'.$category->icon) }}" width="50px">
                                <p class="help-block">Your Icon image goes here.</p>
                            </div>


                            <div class="checkbox"> <label>
                                    <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : ''}}> Show/Hide </label>
                            </div>
                            <button type="submit" class="btn btn-default">Update</button>
                        </form>
                    </div>
                </div>

                {{--                <div class="form-grids row widget-shadow" data-example-id="basic-forms">--}}
                {{--                    <div class="form-title">--}}
                {{--                        <h4>Add Category :--}}
                {{--                            <a href="{{url('layouts.Admin')}}" class="btn fa fa-home btn-primary pull-right"></a>--}}
                {{--                        </h4>--}}
                {{--                        @if(Session('status'))--}}
                {{--                            <div class="alert alert-success" role="alert">--}}
                {{--                                {{session('status')}}--}}
                {{--                            </div>--}}
                {{--                        @endif--}}
                {{--                    </div>--}}
                {{--                    <div class="form-body">--}}
                {{--                        <form action="{{ url('category-store') }}" method="POST">--}}
                {{--                            @csrf--}}


                {{--                            <div class="form-group col-md-6">--}}
                {{--                                <label for="">Group Id (Name)</label>--}}
                {{--                                <select name="" class="form-control">--}}
                {{--                                    <option value="">Select</option>--}}
                {{--                                    @foreach($group as $groups)--}}
                {{--                                        <option value="" >Dummy</option>--}}
                {{--                                    @endforeach--}}

                {{--                                </select>--}}
                {{--                            </div>--}}
                {{--                            --}}

                {{--                            <div class="col-md-6">--}}
                {{--                                <div class="form-group">--}}
                {{--                                    <label for="exampleInputPassword1">Name</label>--}}
                {{--                                    <input type="text"--}}
                {{--                                           name="name"--}}
                {{--                                           class="form-control"--}}
                {{--                                           id=""--}}
                {{--                                           placeholder="Enter Description">--}}

                {{--                                </div>--}}
                {{--                            </div>--}}


                {{--                            <div class="col-md-12">--}}
                {{--                            <div class="form-group">--}}
                {{--                                <label for="exampleInputPassword1">Description</label>--}}
                {{--                                <textarea rows="4"--}}
                {{--                                          name="describe"--}}
                {{--                                          class="form-control"--}}
                {{--                                          id=""--}}
                {{--                                          placeholder="Enter Description">--}}

                {{--                                </textarea>--}}

                {{--                            </div>--}}
                {{--                            </div>--}}


                {{--                            <div class="col-md-6">--}}
                {{--                            <div class="form-group">--}}
                {{--                                <label for="">Image</label>--}}
                {{--                                <input class="form-control"--}}
                {{--                                       name="category_img"--}}
                {{--                                       type="file">--}}
                {{--                            </div>--}}
                {{--                            </div>--}}

                {{--                            <div class="col-md-6">--}}
                {{--                            <div class="form-group">--}}
                {{--                                <label for="">Icon</label>--}}
                {{--                                <input class="form-control"--}}
                {{--                                       name="category_icon"--}}
                {{--                                       type="file">--}}
                {{--                            </div>--}}
                {{--                            </div>--}}

                {{--                            <div class="checkbox">--}}
                {{--                                <label>--}}
                {{--                                    <input name="status"--}}
                {{--                                           type="checkbox"> Show / Hide </label>--}}
                {{--                            </div>--}}


                {{--                            <button type="submit" class="btn btn-default">Save</button>--}}

                {{--                        </form>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>



    @include('footer')
@endsection

