<!DOCTYPE html>
<html lang="en">

<head>
    <title>ArtVenture</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    @include('home.css')
</head>

<body>
    @include('home.header')

    @include('home.banner')
    <hr>
    @include('home.body')
    <hr>
    @include('home.community')
    <hr>
    @include('home.news')
    <hr>
    @include('home.about')

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

    <!-- Scroll to Top Button -->
    <button id="scrollTopBtn" title="Go to top"
        style="
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 100;
        background: #4facfe;
        border: none;
        outline: none;
        box-shadow: none;
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;    
        font-size: 24px;
        display: none;
        transition: background 0.3s ease;
        line-height: 45px;
        text-align: center;
        padding: 0;
    ">
        ↑
    </button>

    <script>
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('#scrollTopBtn').fadeIn();
            } else {
                $('#scrollTopBtn').fadeOut();
            }
        });

        $('#scrollTopBtn').on('click', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
            return false;
        });
    </script>
</body>

</html>