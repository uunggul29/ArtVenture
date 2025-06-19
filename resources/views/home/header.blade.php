<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style type="text/css">
        .button-group-wrapper {
            display: flex;
            gap: 15px;
        }
        /* Back Button */
        .custom-btn {
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 30px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-btn:hover {
            background-color:rgba(92, 59, 147, 0.67);
            box-shadow: 0 4px 15px rgba(106, 58, 183, 0.4);
            color: #fff !important;
            text-decoration: none;
        }
    </style>
</head>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky" style="position: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a class="logo">
                        <img src="assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#product">Artworks</a></li>
                        <li class="scroll-to-section"><a href="#community">Community</a></li>
                        <li class="scroll-to-section"><a href="#news">News</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>

                        @if (Route::has('login'))

                        @auth
                        <li class="scroll-to-section"><a href="{{url('myorder')}}">History</a></li>
                        <li class="nav-item">
                            <a href="{{url('mycart')}}"><i class="fas fa-shopping-bag"></i>[{{$count}}]</a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">

                            @csrf
                            <input class="btn btn-danger custom-btn" type="submit" value="Log Out" onclick="return confirm('Are you sure?');">
                        </form>

                        @else
                        <div class="button-group-wrapper">
                            <a href="{{ url('login') }}" class="btn btn-primary position-relative custom-btn">Login</a>
                            <a href="{{ url('register') }}" class="btn btn-success position-relative custom-btn">Register</a>
                        </div>
                        @endauth
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->