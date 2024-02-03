<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XStore - Admin-AddProducts</title>

    @include('admin.css')

    <style>
        .center {
            font-size: 35px;
        }
        .category{
            color: black;
        }
        .form-group{
            display: flex;
            flex-direction: column;
            margin: 24px 0px;
        }
        .input{
            color: black;
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
                    <h2>Add Product</h2>

                    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data" class="w-50 my-5">
                        @csrf

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control input" placeholder="Enter product name" required>
                        </div>

                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="image" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" name="price" class="form-control input" placeholder="Enter product price" required>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" min="0" name="quantity" class="form-control input" placeholder="Enter product quantity" required>
                        </div>

                        <div class="form-group">
                            <label>Product Category</label>

                            <select name="category" class="category" required>

                                <option value="" selected="">not selected</option>

                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <input type="submit" name="submit" value="Add Product" class="btn btn-outline-light">
                    </form>

                </div>
            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')


</body>

</html>