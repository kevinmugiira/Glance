

@extends('layouts.app')



@section('content')

    @include('dashboard-header')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Orders: </h2>



                <div class="card-header">
                    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                        <h4>View Order:
                            <a href="{{ url('layouts.Admin') }}" class=" fa fa-home btn btn-info pull-right">Home</a>
                        </h4>

                        <div class="card-body">

                            <div class="panel-body widget-shadow">
                                <h4>
                                    Order Details
                                </h4>
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>Tracking No</label>
                                            <h6>{{$orders->tracking_no}}</h6>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mt-3">
                                        <div class="border p-2">
                                            <label>Tracking Msg</label>
                                            <h6>{{isset($orders->tracking_msg) == true ? $orders->tracking_msg:'Nothing Updated'}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>Payment Mode</label>
                                            <h6>{{$orders->payment_mode}}</h6>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
{{--                                        payment status =--}}
{{--                                        * 0 = Nothing Paid--}}
{{--                                        * 1 = Cash Paid--}}
{{--                                        * 2 = Razorpay payment successful--}}
{{--                                        * 3 = Razorpay payment failed--}}
{{--                                        * 4 = Other forms of payment eg stripe,paypal--}}
                                        <div class="border p-2">
                                            <label>Payment Status</label>
                                            <h6>
                                                @if($orders->payment_status == '0')
                                                    COD - pending
                                                @elseif($orders->payment_status == '1')
                                                    COD - Paid
                                                    @elseif($orders->payment_status == '2')
                                                Razorpay Successful!
                                                    @elseif($orders->payment_status == '3')
                                                Razorpay Failed!
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>Payment ID</label>
                                            <h6>{{isset($orders->payment_id) == true ? $orders->payment_id:'COD Payment - No Id'}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
{{--                                            0 = Pending--}}
{{--                                            1 = Completed--}}
{{--                                            2 = Rejected/Cancelled--}}
                                            <label>Order Status</label>
                                            <h6>
                                                @if($orders->order_status == '0')
                                                    pending
                                                    @elseif($orders->order_status == '1')
                                                completed
                                                    @elseif($orders->order_status == '2')
                                                Rejected/Cancelled
                                                    @endif
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="border p-2">
                                            <label>Cancelled Reason</label>
                                            <h6>{{isset($orders->cancel_reason) == true ? $orders->cancel_reason:'Not Cancelled'}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="bg-dark">

                            <div class="row">

                                    <h4>Ordered Items:</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Grandtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @php $total = '0'; @endphp
                                        @foreach($ord as $items)
                                            <tr>
                                               <td >{{ $items->id }}</td>
                                               <td>{{ $items->products->name }}</td>
                                               <td>{{ $items->quantity  }}</td>
                                               <td>{{ number_format($items->price, 0)  }}</td>
                                               <td>{{ $items->price * $items->quantity }}</td>
                                           </tr>
                                            @php $total = $total + ($items->price * $items->quantity) @endphp
                                        @endforeach

                                        <tr>
                                            <td colspan="4" class="text-right">Sub Total</td>
                                            <td>{{ number_format( $total, 0) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Tax Amount</td>
                                            <td>
{{--                                                Total = total_amount * Tax / 100 --}}
                                                @if(isset($items->tax_amt))
                                                    @php
                                                    $tax = $items->tax_amt;
                                                    $tax_total = ($total * $tax)/100 ;
                                                    @endphp
                                                    {{ number_format($tax_total) }}
                                                @else
                                                    0
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Grand Total</td>
                                            <td>
                                                @if(isset($items->tax_amt))
                                                    @php
                                                       $grand_total = $total + $tax_total;
                                                    @endphp
                                                    {{ number_format($grand_total, 0)}}
                                                @else
                                                {{ number_format( $total, 0) }}
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        <hr class="bg-dark">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5>Customer Details</h5>
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>First Name</label>
                                            <h6>{{ $orders->users->firstname }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>Last Name</label>
                                            <h6>{{ $orders->users->lastname }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>Email </label>
                                            <h6>{{ $orders->users->email }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="border p-2">
                                            <label>Address</label>
                                            <h6>{{ $orders->users->address }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="border p-2">
                                            <label>City</label>
                                            <h6>{{ $orders->users->city }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>County</label>
                                            <h6>{{ $orders->users->county }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <label>Phone</label>
                                            <h6>{{ $orders->users->phone }}</h6>
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
    </div>
    </div>

    @include('footer')
@endsection

