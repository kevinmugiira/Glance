

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Order: </h2>

                <div class="container">

                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>Order Status
                            <a href="{{ url('admin.orders.index') }}" class=" fa fa-back btn btn-info pull-right">Back</a>
                        </h4>


                    <div class="row">
                        <div class="mt-3">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="panel-body widget-shadow">
                                        <h4>Order Details:
                                            <a href="{{ url('admin.orders.index') }}" class="badge badge-info  pull-right">Tracking Id: {{$order->tracking_no}}</a>
                                        </h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Tracking Status</th>
                                                <th>Order Status</th>
                                                <th>Payment Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                 <td>
                                                     @if($order->tracking_msg == NULL)
                                                         No Status Update
                                                     @else
                                                         {{$order->tracking_msg}}
                                                     @endif
                                                 </td>
                                                 <td>Order Pending</td>
                                                 <td>Payment pending</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="card">
                                   <div class="card-body col-md-6 mt-3">
                                        <div class="panel-body widget-shadow">
                                            <h4>Tracking Status update</h4>
                                            @if($order->order_status == '1')
                                                {{ $order->tracking_msg }}
                                            @elseif($order->order_status == '2')
                                                {{ $order->tracking_msg }}
                                            @else
                                                <form action="{{ url('order/update-tracking-status/'. $order->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="input-group mb-3">
                                                        <select name="tracking_msg" class="custom-select" required id="">
                                                            <option value="">--Select--</option>
                                                            <option value="Pending">{{ $order->tracking_msg == 'Pending' ? 'selected':'' }}</option>
                                                            <option value="Packed">{{ $order->tracking_msg == 'Packed' ? 'selected':'' }}</option>
                                                            <option value="Shipped">{{ $order->tracking_msg == 'Shipped' ? 'selected':'' }}</option>
                                                            <option value="Delivered">{{ $order->tracking_msg == 'Delivered' ? 'selected':'' }}</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="input-group-text bg-info text-white">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            <div class="form-group">
                                                <label for=""></label>
                                                <select name="name" class="form-control">
                                                    <option>--Select--</option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                   </div>
                         </div>

                         <div class="card">
                             <div class="card-body">
                                <div class="col-md-6 mt-3">
                                    <div class="panel-body widget-shadow">
                                         <h4>Cancel Order</h4>
                                         <div class="form-group">
                                                <label for=""></label>
                                                <select name="name" class="form-control">
                                                    <option>--Select--</option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <div class="card">
                             <div class="col-md-6 mt-3">
                                 <div class="panel-body widget-shadow">
                                         <h4>Complete Order</h4>
                                         <button type="submit" class="btn btn-primary"> Complete</button>
                                 </div>
                             </div>
                         </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')
@stop
