

@extends('layouts.app')



@section('content')

    @include('dashboard-header')



    <!-- Modal -->
    <div class="modal fade" id="SubCategoryMODAL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Sub-Category</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">

                <form class="modal-content" action="{{ url('sub-category-store') }}" method="POST" enctype="multipart/form-data">

                   @csrf

                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Category Id (Name)</label>
                            <select name="category_id" class="form-control" >
                                @foreach($category as $catitem)
                                    <option value="{{ $catitem->id }}" >{{ $catitem->name }}</option>
                                @endforeach

                                </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub-Category Name</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Name">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Custom Url (Slug)</label>
                            <input type="text"
                                   name="url"
                                   class="form-control"
                                   placeholder="Enter Url">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Description</label>
                            <textarea rows="4"
                                      name="description"
                                      class="form-control"
                                      placeholder="Enter Description">
                                </textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputFile"> Image</label>
                            <input type="file" name="subcategory_img" >
                            <p class="help-block">Your Sub-Category Image goes here.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Priority</label>
                            <input type="number"
                                   name="priority"
                                   class="form-control"
                                   placeholder="Enter Priority">
                        </div>
                    </div>

                <div class="col-md-2">
                    <div class="checkbox"> <label>
                            <input type="checkbox" name="status"> Show/Hide </label>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
            </div>
            </div>
        </div>
    </div>



    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Sub Categories: </h2>



                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Sub Category/Collections:
                            <a href="{{ url('layouts.Admin') }}" class=" fa fa-home btn btn-info pull-right">Home</a>
                        </h4>

                        <div class="card-body">

                            <div class="panel-body widget-shadow">
                                <h4>
                                    <a href="" data-toggle="modal" data-target="#SubCategoryMODAL" class="btn btn-info fa fa-plus-circle ml-5">Add a Sub-Category</a>
                                    <a href="{{ url('sub-category-deleted-records') }}" class="btn btn-info ">Deleted Records</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th>Show/Hide</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subcategory as $categories)
                                        <tr>
                                            <th scope="row">{{ $categories->id }}</th>
                                            <td>{{ $categories->name }}</td>
                                            <td>{{ $categories->category->name }}</td>
                                            <td>
                                                <img src="{{asset('/uploads/subcategoryimage/'. $categories->image)}}" width="50px"/>
                                            </td>

                                            <td>
                                                <input type="checkbox" {{ $categories->status == '1' ? 'checked' : '' }} >
                                            </td>
                                            <td>
                                                <a href="{{ url('sub-category/edit/'. $categories->id) }}" class="badge badge-primary">Edit</a>
                                                <a href="{{ url('sub-category/delete/'.$categories->id) }}" class="badge badge-danger" onclick="return confirm('Sure you want to Delete?')">Delete</a>
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

