<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Order Details</h1>
        <p>Order ID: {{ $order->id }}</p>
        <p>Customer Name: {{ $order->name }}</p>
    </div>

    <h2>Order Items:</h2>
    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
            </tr>



        </tbody>
    </table>

    {{-- <h3>Total Price: {{ $order->total_price }}</h3> --}}
</body>
</html>
