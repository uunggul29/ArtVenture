<!DOCTYPE html>
<html lang="en">

<head>
    <title>ArtVenture - Detail Artwork</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">

    <style>
        /* Body & Typography */
        body {
            font-family: 'EB Garamond', serif;
            background: linear-gradient(135deg, #f0f4ff, #d9e4ff);
            color: #333;
            min-height: 100vh;
            margin: 0;
            padding-top: 80px;
        }

        /* Header */
        .header-area {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff !important;
        }

        /* Back Button */
        .custom-btn {
            margin-right: 15px;
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

        /* Section Title */
        h1 span.text-gradient {
            background: linear-gradient(to right, #4facfe, #8e44ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Card */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #fff;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.15);
        }

        /* Image Styling */
        .card img {
            border-radius: 15px;
            max-height: 320px;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.05);
        }

        /* Info Text */
        .card h2 {
            font-size: 2.25rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .card p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .card p strong.text-secondary {
            color: #6c757d;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .card img {
                max-height: 250px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="/assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <div>
                                <a class="btn btn-primary position-relative custom-btn" href="{{url('/')}}">Back</a>
                            </div>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Detail Section -->
    <section class="section" id="product">
        <div class="container">
            <h1 class="text-center fw-bold mb-5">Detail <span class="text-gradient">Artwork</span></h1>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-4">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-5 text-center">
                                <img src="/produk/{{$data->image}}" alt="{{$data->title}}" class="img-fluid rounded">
                            </div>
                            <div class="col-md-7">
                                <h2>{{$data->title}}</h2>
                                <p><strong class="text-secondary">Price:</strong> <span class="text-primary fw-semibold">${{ number_format($data->price, 0, ',', '.') }}</span></p>
                                <p><strong class="text-secondary">Category:</strong> <span class="text-dark">{{$data->category}}</span></p>
                                <p class="text-justify"><strong class="text-secondary">Description:</strong><br>{{$data->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        @include('/home.footer')
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
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