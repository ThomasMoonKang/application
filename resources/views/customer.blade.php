<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #505050;
                font-family: 'Raleway', sans-serif;
                margin: 0;
            }
        </style>
    </head>
    <body>
    <h1>{{ $customer->name }}</h1>
    <ul>
        @foreach($customer->orders as $order)
            <li> {{ $order->name }}</li>
        @endforeach
    </ul>
    </body>
</html>
