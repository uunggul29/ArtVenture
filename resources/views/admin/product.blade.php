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
            width: 300px;
            height: 40px;
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

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <form action="{{ url('add_product') }}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="product" placeholder="Enter Category Name">
                        <input class="btn btn-info" type="submit" value="Add Category">
                    </div><br>
                    <h2 class="text-center mb-4">Category</h2>
                </form>

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->product_name }}</td>
                                    <td style="text-align: center;"><a href="{{ url('delete_category', $data->id) }}"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
