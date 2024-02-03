<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XStore - Admin-ShowProducts</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables Link -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>



    @include('admin.css')

    <style>
        .center {
            font-size: 35px;
        }

        .table {
            border: 2px solid white;
            width: 90%;
            margin: 40px 0px 0px 50px;
        }

        .tr {
            background-color: whitesmoke;
            color: black;
        }

        .download {
            display: flex;
            justify-content: end;
            margin: 0px 70px 0px 0px;
        }

        td {
            padding: 12px 12px;
        }

        input {
            color: black;
        }
        .search {
            display: flex;
            justify-content: center;
            margin: 10px 20px 0px 0px;
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif

                <div class="d-flex justify-content-center flex-column center mx-5">
                    <h2>Show Product</h2>
                </div>

                
                <div class="download">
                    <a href="{{url('download_pdf')}}" class="btn btn-info">Download Data</a>
                </div>

                <form class="d-flex mx-auto search" action="{{url('admin_search')}}" method="get">
                    @csrf
                    <input class="form-control me-2 col-lg-5" type="search" name="search" placeholder="Search" aria-label="Search">
                    <input type="submit" value="Search" class="btn btn-outline-light">
                </form>

                <table class="table">

                    <thead>
                        <tr class="tr">
                            <th>id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    @foreach($product as $product)

                    <tbody>
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td><img src="/product/{{$product->image}}" alt="image"></td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td><a href="{{url('edit_product', $product->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a onclick="return confirm('Do You Want To Delete')" href="{{url('delete_product', $product->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    </tbody>

                    @endforeach

                </table>

                <div class="row">
                   
                </div>

            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
    </div>
    @include('admin.script')


    <!-- DATATABLES SCRIPT -->
    

</body>

</html>