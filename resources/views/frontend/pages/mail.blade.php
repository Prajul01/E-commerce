<html>
<head>
    <style>
        .container {
            padding: 10px;
        }

        #contact {
            border-collapse: collapse;
            width: 100%;
        }

        #contact td,
        #contact th {
            border: 1px solid #ddd;
            padding: 8px;
            width: 30%;
        }

        #contact th {
            width: 10%;
        }

        #contact tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #contact tr:hover {
            background-color: lightyellow;
        }

        #contact th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #8062c7;
            color: white;
        }
        .heading {
            background-color: lightgray;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="heading">
        <h1>Product Ordered</h1>
    </div>
     Dear,Admin Our client {{$order_data['name']}} has orderd the following thing(s)
    <table id="customers">
        <thead>
        </thead>
        <tbody>
        @foreach ($data['cartItems'] as $cat)
            <tr>
                <th> Name</th>
                <td> {{$cat->name}}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{$cat->price}}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{$cat->quantity}}</td>
            </tr>
            <tr>
                <th>Sub-Total</th>
                <td>{{$cat->quantity*$cat->price}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
Please make his delivey to the address {{$order_data['address']}}
his phone number is {{$order_data['phone']}} and his email is:{{$order_data['email']}}
</body>

</html>



{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Confirmation Mial</title>--}}
{{--</head>--}}
{{--<body>--}}



{{--<table id="example1" style="border: black 2px">--}}
{{--   --}}
{{--    <tfoot>--}}
{{--    <tr>--}}
{{--        <th>Sn</th>--}}
{{--        <th>Name</th>--}}
{{--        <th>Action</th>--}}

{{--    </tr>--}}
{{--    </tfoot>--}}
{{--</table>--}}







{{--</body>--}}
{{--</html>--}}
