<!DOCTYPE html>
<html lang="en">

<head>
    <title>ArtVenture</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- External Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @include('home.css')

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9f0f4);
            font-family: 'EB Garamond', serif;
        }

        .header-area {
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            padding: 15px 0;
        }

        .main-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .main-nav .nav {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        .main-nav a {
            color: #333;
            font-weight: 600;
            text-decoration: none;
        }

        .main-nav a:hover {
            color: #6c5ce7;
        }

        .qris-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            animation: slideIn 0.6s ease-in-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .qris-container h3 {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .qris-image {
            max-width: 280px;
            margin: 25px auto;
            padding: 16px;
            background-color: #fdfdfd;
            border: 2px dashed #ced6e0;
            border-radius: 12px;
        }

        .instruction-text {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .countdown-timer {
            font-size: 1.5rem;
            margin: 25px auto;
            background-color: #fff4f4;
            border: 2px solid #ff6b6b;
            color: #c0392b;
            padding: 12px;
            border-radius: 10px;
            font-weight: bold;
        }

        .timer-expired {
            background-color: #f0f0f0;
            border-color: #b0b0b0;
            color: #888;
        }

        .btn-lg {
            font-size: 1.1rem;
            padding: 1px 26px;
            border-radius: 6px;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .modal-body {
            text-align: center;
            padding: 35px;
        }

        .success-gif {
            width: 110px;
            margin-bottom: 15px;
        }

        footer {
            margin-top: 80px;
        }
    </style>
</head>

<body>

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
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- Payment Section -->
    <br> <br> <br>
    <div class="qris-container">
        <h3>Pay via QR Code</h3>
        <p class="instruction-text">
            Open your E-Wallet or banking app, then scan the QR code below to complete your payment.
        </p>

        <img src="/assets/images/qris.png" alt="QR Code" class="qris-image">
        <div id="countdown" class="countdown-timer">Time remaining: 10:00</div>

        <button type="button" id="checkStatusBtn" class="btn btn-success btn-lg" data-toggle="modal" data-target="#paymentSuccessModal">
            Done
        </button>
    </div>


    <!-- Success Modal -->
    <div class="modal fade" id="paymentSuccessModal" tabindex="-1" role="dialog" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/images/success.gif') }}" alt="Success" class="success-gif">
                    <h4 class="text-success font-weight-bold">Payment Successful!</h4>
                    <p>Your payment has been received. Thank you for your purchase.</p>
                    <a href="{{ url('myorder') }}" class="btn btn-primary btn-block mt-3">View My Orders</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        @include('home.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            const durationMinutes = 10;
            let timerSeconds = durationMinutes * 60;

            const countdownElement = $('#countdown');
            const checkStatusBtn = $('#checkStatusBtn');

            function updateCountdown() {
                const minutes = Math.floor(timerSeconds / 60);
                const seconds = timerSeconds % 60;
                countdownElement.text(`Time remaining: ${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`);

                if (timerSeconds <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.text("Time expired!");
                    countdownElement.addClass('timer-expired');
                    checkStatusBtn.addClass('disabled').attr('data-toggle', '').attr('data-target', '').css('pointer-events', 'none');
                } else {
                    timerSeconds--;
                }
            }

            const countdownInterval = setInterval(updateCountdown, 1000);
            updateCountdown();
        });
    </script>
</body>

</html>