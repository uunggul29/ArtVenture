<!DOCTYPE html>
<html lang="en">

<head>
    <title>ArtVenture</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    @include('home.css')
    <style type="text/css">
        body {
            font-family: 'EB Garamond', serif;
            background: #fdfcfc;
        }

        .custom-btn {
            margin-right: 15px;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .custom-btn:hover {
            background-color: rgba(92, 59, 147, 0.67);
            box-shadow: 0 4px 15px rgba(106, 58, 183, 0.4);
            color: #fff !important;
            text-decoration: none;
        }

        .text-gradient {
            background: linear-gradient(to right, #4facfe, #8e44ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cart-value {
            text-align: center;
            margin-bottom: 50px;
            padding-top: 100px;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 100px;
            max-width: 100%;
            padding: 0 20px;
        }

        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4c4c4c;
            color: white;
            font-size: 18px;
        }

        td {
            background-color: #f9f9f9;
            font-size: 16px;
            vertical-align: middle;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover td {
            background-color: #e4e4e4;
        }

        td img {
            width: 120px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .button-group-wrapper {
            display: flex;
            gap: 15px;
        }

        @media (max-width: 768px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            th {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                text-align: left;
            }

            td:before {
                content: attr(data-label);
                position: absolute;
                left: 20px;
                top: 15px;
                font-weight: bold;
                color: #444;
            }

            td img {
                width: 100px;
            }
        }
    </style>

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            @if (Route::has('login'))

                            @auth
                            <li class="scroll-to-section"><a href="{{url('myorder')}}">History</a></li>
                            <li class="scroll-to-section"><a href="{{url('mycart')}}">Cart</a></li>
                            <form method="POST" action="{{ route('logout') }}">

                                @csrf
                                <div>
                                    <a class="btn btn-primary position-relative custom-btn" href="{{url('/')}}">Back</a>
                                </div>
                            </form>

                            @else
                            <div class="button-group-wrapper">
                                <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                                <a href="{{ url('register') }}" class="btn btn-success">Register</a>
                            </div>
                            @endauth
                            @endif
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <br><br><br><br><br>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="cart-value">
        <h1 class="display-5 fw-bold">Your <span class="text-gradient">History</span></h1>
    </div>

    <div class="div_deg">
        <table>
            <tr>
                <th>No</th>
                <th>Name Art</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
            </tr>
            @foreach ($order as $order)
            <tr>
                <td data-label="No">{{ $loop->iteration }}</td>
                <td data-label="Name Art">{{$order->produk->title}}</td>
                <td data-label="Price">${{ number_format($order->produk->price, 0, ',', '.') }}</td>
                <td data-label="Image">
                    <img src="/produk/{{$order->produk->image}}" alt="Artwork Image">
                </td>
                <td data-label="Status">{{$order->status}}</td>
            </tr>

            @endforeach
        </table>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        @include('home.footer')
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>