<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XStore - Admin-AddCategories</title>

    @include('admin.css')

    <style>
        .center {
            font-size: 35px;
        }

        .table {
            border: 2px solid white;
            width: 42%;
            margin: 0px 0px 0px 50px;
        }
        .form-group{
            display: flex;
            flex-direction: column;
            margin: 10px 0px;
        }
        .tr{
            background-color: whitesmoke;
            color: black;
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
                    <h2>Add Category</h2>

                    <form action="{{url('add_category')}}" method="post" class="w-50 my-4">
                        @csrf

                        <div class="form-group">
                            <label>Enter Category</label>
                            <input type="text" name="category" class="form-control input" placeholder="Enter category">
                        </div>

                        <input type="submit" name="submit" value="Add Category" class="btn btn-outline-light">
                    </form>

                </div>

                <table class="table">
                    <tr class="tr">
                        <td>Category</td>
                        <td>Action</td>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td><a onclick="return confirm('Do You Want To Delete')" href="{{url('delete_category', $data->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
    </div>


</body>

</html>