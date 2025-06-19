<!DOCTYPE html>
<html lang="en">

<head>
    <title>ArtVenture</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    @include('home.css')
    <style type="text/css">
        body {
            font-family: 'EB Garamond', serif;
            background-color: #f9f9fb;
            color: #333;
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
            margin-top: 70px;
            margin-bottom: 40px;
        }

        .div_deg {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
        }

        .odrer_deg {
            width: 100%;
            max-width: 500px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }

        .odrer_deg input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .div_gap {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            margin-top: 50px;
            margin-bottom: 30px;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #2d2d2d;
            color: white;
            font-size: 18px;
        }

        td {
            background-color: #fdfdfd;
            vertical-align: middle;
        }

        td img {
            width: 120px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        tr:nth-child(even) td {
            background-color: #f4f4f4;
        }

        tr:hover td {
            background-color: #ececec;
        }

        .btn-danger {
            border-radius: 8px;
        }

        @media screen and (max-width: 768px) {

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
                color: #555;
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
        <h1 class="display-5 fw-bold">Your <span class="text-gradient">Cart</span></h1>
    </div>

    <div class="div_deg">
        <div class="odrer_deg">
            <form action="{{url('confirm_order')}}" method="post">
                @csrf
                <div class="div_gap">
                    <label for="userName">Name</label>
                    <input type="text" name="name" id="userName" value="{{ Auth::user()->name }}" readonly required>
                </div>
                <div class="div_gap">
                    <label for="">Address</label>
                    <input type="text" name="address" value="{{Auth::user()->address}}" required>
                </div>
                <div class="div_gap">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" value="{{Auth::user()->phone}}" required>
                </div>
                <!-- <div class="div_gap">
                    <input class="btn btn-success" type="submit" value="Order" id="">
                </div> -->
                <div class="div_gap" style="text-align: center;">
                    <button href="{{url('payment')}}" class="btn btn-primary" type="submit" value="Order" id="" style="padding: 10px 30px; border-radius: 25px;">Order</button>
                </div>
            </form>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Name Product</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php
            $value = 0;
            ?>

            @foreach ($cart as $carte)
            <tr>
                <td data-label="No">{{ $loop->iteration }}</td>
                <td data-label="Name Product">{{ $carte->produk->title }}</td>
                <td data-label="Price">${{ number_format($carte->produk->price, 0, ',', '.') }}</td>
                <td data-label="Image">
                    <img src="produk/{{$carte->produk->image}}" alt="Product Image">
                </td>
                <td data-label="Action">
                    <form onsubmit="return confirm('Are you sure to delete this Cart?');" action="{{ url('delete_cart', $carte->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>


            <?php
            $value = $value + $carte->produk->price;
            ?>

            @endforeach
        </table>
    </div>

    <div class="cart-value">
        <h3 class="fw-bold">Total Price:
            <span class="text-gradient">${{ number_format($value, 0, ',', '.') }}</span>
        </h3>
    </div>

    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        @include('home.footer')
    </footer>


    @include('home.js')

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