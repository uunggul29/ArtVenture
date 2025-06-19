<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
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

        th {
            background-color: skyblue;
            color: black;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
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


                <div class="div_deg">
                    <table>
                        <tr>
                            <th>Name Customer</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Name Artwork</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>Print Invoice</th>
                        </tr>

                        @foreach ($data as $order)
                        <tr>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->rec_address }}</td>
                            <td>{{ $order->phone }}</td>

                            <td>{{ optional($order->produk)->title ?? 'Produk tidak tersedia' }}</td>
                            <td>{{ optional($order->produk)->price ?? '-' }}</td>
                            <td>
                                @if(optional($order->produk)->image)
                                <img width="150" src="/produk/{{ $order->produk->image }}" alt="">
                                @else
                                <span>No Picture</span>
                                @endif
                            </td>

                            <td>
                                @if($order->status == 'in progress')
                                <span style="color: red">{{ $order->status }}</span>
                                @elseif($order->status == 'On The Way')
                                <span style="color: skyblue">{{ $order->status }}</span>
                                @elseif($order->status == 'Delivered')
                                <span style="color: lightgreen">{{ $order->status }}</span>
                                @else
                                <span>{{ $order->status }}</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ url('on_the_way', $order->id) }}" class="btn btn-danger">On The Way</a>
                                <a href="{{ url('delivered', $order->id) }}" class="btn btn-success">Delivered</a>
                            </td>

                            <td>
                                <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-secondary">Print Invoice</a>
                            </td>
                        </tr>
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