

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Products Collections</h2>

                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Add Product :
                            <a href="{{url('layouts.Admin')}}" class="btn fa fa-home btn-primary pull-right"></a>
                        </h4>
                        @if(Session('status'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> {{session('status')}}
                                <!--<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>-->
                            </div>
                        @endif

                        @if(Session('status'))
                            <div class="alert alert-success fade show" role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-body">
                        <form action="{{ url('product-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                           <div class="row">
                               <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item " style="margin-right: 5px" role="presentation">
                                    <button class="btn btn-info nav-link active" id="product-tab" data-toggle="tab" data-target="#product" type="button" role="tab" >Product</button>
                                </li>
                                <li class="nav-item" style="margin-right: 5px" role="presentation">
                                    <button class="btn btn-info nav-link active" id="description-tab" data-toggle="tab" data-target="#description" type="button" role="tab" >Description</button>
                                </li>
                                <li class="nav-item" style="margin-right: 5px" role="presentation">
                                    <button class="btn btn-info nav-link active" id="seo-tab" data-toggle="tab" data-target="#seo" type="button" role="tab" >SEO</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-info nav-link active" id="status-tab" data-toggle="tab" data-target="#status" type="button" role="tab">Product Status</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade " id="product" role="tabpanel" >

                                    <div class="row mt-3">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Product Name</label>
                                                <input type="text"
                                                       name="name"
                                                       class="form-control"
                                                       placeholder="Product name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Select Sub-category (Eg: Food Crop)</label>
                                                <select name="sub_category_id" class="form-control" required>
                                                    <option value="">Select Sub-Category</option>
                                                    @foreach($subcategory as $subitem)
                                                        <option value="{{ $subitem->id }}">{{ $subitem->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Custom URL (Slug)</label>
                                                <input type="text"
                                                       name="url"
                                                       placeholder="Custom URL"
                                                       class="form-control"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Small Description</label>
                                                <textarea name="small_description"
                                                          rows="4"
                                                          class="form-control"
                                                          placeholder="Small Description"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="">Product Image</label>
                                                <input type="file"
                                                       name="prod_image"
                                                       placeholder="Product Image"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Sale Tag</label>
                                                <input type="number"
                                                       name="sale_tag"
                                                       placeholder="Sale Tag"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Original Price</label>
                                                <input type="number"
                                                       name="original_price"
                                                       placeholder="Original Price"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Offer Price</label>
                                                <input type="number"
                                                       name="offer_price"
                                                       placeholder="Offer Price"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input type="number"
                                                       name="quantity"
                                                       placeholder="Quantity"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Priority</label>
                                                <input type="number"
                                                       name="priority"
                                                       placeholder="Priority">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="description" role="tabpanel" >
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">High Lights</label>
                                                <input type="text" name="p_highlight_heading" placeholder="High-Light Heading" class="form-control">
                                                <textarea name="p_highlights" placeholder="High-Light Description" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Product Description</label>
                                                <input type="text" name="p_description_heading" placeholder="Product Description" class="form-control">
                                                <textarea name="p_description" placeholder="Product Description" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Product Details/Specifications</label>
                                                <input type="text" name="p_details_heading" placeholder="Product Details/Specification Heading" class="form-control">
                                                <textarea name="p_details" placeholder="Product Details/Specification" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="seo" role="tabpanel">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Title</label>
                                                <textarea name="meta_title"
                                                          placeholder="High-Light Description"
                                                          rows="4"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Description</label>
                                                <textarea name="meta_description"
                                                          placeholder="Product Description"
                                                          rows="4"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Keywords</label>
                                                <textarea name="meta_keyword"
                                                          placeholder="Product Details/Specification"
                                                          rows="4"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="status" role="tabpanel">
                                    <div class="row ">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">New Arrivals</label>
                                                <input type="checkbox" name="new_arrival" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Featured Products</label>
                                                <input type="checkbox" name="featured_products" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Popular Products</label>
                                                <input type="checkbox" name="popular_products" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Offer Products</label>
                                                <input type="checkbox" name="offers_products" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Show/Hide</label>
                                                <input type="checkbox" name="status" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                               <div class="form-group mt-3 text-right">
                                   <button type="submit" class="btn btn-default">SAVE</button>
                               </div>

                           </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('footer')
@endsection

