<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details PDF</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .center {
            font-size: 35px;
            margin: 0px 50px;
        }

        .table {
            border: 2px solid black;
            width: 90%;
            margin: 40px 0px 0px 50px;
        }

        .tr {
            background-color: whitesmoke;
            color: black;
        }
        tr{
            border: 2px solid black;
        }
        td{
            padding: 12px 12px;
        }
    </style>
</head>

<body>
    <h1 class="center">Product Details</h1>

    <table class="table table-striped">
        <tr class="tr">
            <td>id</td>
            <td>Name</td>
            <!-- <td>Image</td> -->
            <td>Price</td>
            <td>Quantity</td>
            <td>Category</td>
            <td>Created at</td>
        </tr>

        @foreach($product as $product)

        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <!-- <td><img src="/product/{{$product->image}}"></td> -->
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->created_at}}</td>
        </tr>

        @endforeach

    </table>

</body>

</html>