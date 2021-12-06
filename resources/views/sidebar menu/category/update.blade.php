
@extends('layouts.app')



@section('content')
    @include('dashboard-header')



        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1">Category</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                        <div class="form-title">
                            <h4> Update Category:</h4>
                        </div>
                        <div class="form-body">
                            <form action="/category/edit/{{ $category->id }}" method="POST">

                                @csrf

                                @method('PUT')

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text"
                                           class="form-control"
                                           id="name"
                                           value="{{ $category->name }}"
                                           placeholder="Product name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Type</label>
                                    <input type="text"
                                           class="form-control"
                                           id="type"
                                           value="{{ $category->type }}"
                                           placeholder="Product type">
                                </div>

                                <div class="checkbox">
                                    <!--<label><input type="checkbox"> Check me out </label>-->
                                </div>

                                <button type="submit"  class="btn btn-default ">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @include('footer')

@endsection
