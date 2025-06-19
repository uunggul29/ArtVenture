<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: black;
        }

        label {
            display: inline-block;
            width: 250px;
            font-size: 18px;
            color: white;
        }

        input[type='text'] {
            width: 350px;
            height: 50px;
        }

        textarea {
            width: 450px;
            height: 80px;
        }

        .input_deg {
            padding: 15px;
        }

        .table_deg {
            border: 2px solid greenyellow;
        }

        thead {
            background-color: #0a6ba8;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        tbody {
            background-color: #2498E0;
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }
    </style>
    @include('admin.css')
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <a href="{{url('add_produk')}}" class="btn btn-info">
                    <i class="bi bi-plus-circle"></i> Add New Artwork
                </a>

                <h2 class="text-center mb-4">Artwork</h2>
                <div class="div_deg">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name Artwork</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($produk as $produks)
                        <tbody>
                            <tr>
                                <td>{{$produks->title}}</td>
                                <td>{{$produks->description}}</td>
                                <td>${{$produks->price}}</td>
                                <td>{{ optional($produks->product)->product_name ?? '-' }}</td>
                                <td>{{$produks->quantity}}</td>
                                <td>
                                    <img src="produk/{{$produks->image}}" style="width: 150px">
                                </td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('edit_produk', $produks->id) }}">Edit</a>
                                    <br><br>
                                    <a class="btn btn-danger" href="{{url('delete_produk',$produks->id)}}">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>