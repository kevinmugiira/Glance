<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>NewGreen = Welcome to NewGreen online purchase</h4>


    <h4>Tracking No: {{ $order_data['trackingno'] }}</h4>
    <h4>First Name: {{ $order_data['firstname'] }}</h4>
    <h4>Last Name: {{ $order_data['lastname'] }}</h4>
    <h4>Mobile #: {{ $order_data['mobile'] }}</h4>
    <h4>Email: {{ $order_data['email'] }}</h4>
    <h4>City: {{ $order_data['city'] }}</h4>
    <h4>County: {{ $order_data['county'] }}</h4>
    <h4>Address: {{ $order_data['address'] }}</h4>

    <hr>

    <table cellpadding="5px" cellspacing="5px" border="1">
        <thead>
           <tr>
               <th>Product Name</th>
               <th>Qty</th>
               <th>Price</th>
           </tr>
        </thead>
        <tbody>

        @php $total = '0' @endphp
        @foreach( $items_in_cart as $data)
           <tr>
               <td>{{ $data['item_name']}}</td>
               <td>{{ $data['item_quantity'] }}</td>
               <td>{{ $data['item_price'] }}</td>
           </tr>
            @php $total = $total + ($data['item_quantity'] * $data['item_price']) @endphp
        @endforeach
        <tr>
            <td colspan="2"> Grand Total</td>
            <td>Ksh: {{ number_format($total, 2) }}</td>
        </tr>
        </tbody>
    </table>
</body>
</html>
