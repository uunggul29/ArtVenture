<head>
    <style>
        body {
            font-family: 'EB Garamond', serif;
            background: linear-gradient(to bottom right, #f5f7fa, #e4eaf0);
            margin: 0;
            padding: 0;
        }

        .container1,
        .container2 {
            display: flex;
            align-items: center;
            padding: 50px 50px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            margin: 40px auto;
            max-width: 1200px;
            gap: 40px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .container1:hover,
        .container2:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .container1:active,
        .container2:active {
            transform: scale(0.98) rotate(-0.3deg);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            cursor: grabbing;
        }

        .container2 {
            flex-direction: row-reverse;
        }

        .image-section {
            flex: 1;
            text-align: center;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 12px;
        }

        .image-section img:hover {
            transform: scale(1.03);
        }

        .text-section {
            flex: 1;
            text-align: center;
        }

        .text-section h1 {
            font-size: 3rem;
            color: #2c2c2c;
            margin-bottom: 10px;
        }

        .text-section h2 {
            font-size: 2rem;
            color: #444;
            margin: 20px 0;
        }

        .text-section h4 {
            font-size: 1.6rem;
            color: #666;
        }

        @media (max-width: 992px) {

            .container1,
            .container2 {
                flex-direction: column;
                padding: 40px 20px;
                gap: 20px;
            }

            .text-section h1 {
                font-size: 2.2rem;
            }

            .text-section h2 {
                font-size: 1.7rem;
            }

            .text-section h4 {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 576px) {
            .text-section h1 {
                font-size: 1.8rem;
            }

            .text-section h2 {
                font-size: 1.5rem;
            }

            .text-section h4 {
                font-size: 1.2rem;
            }

            .container1,
            .container2 {
                margin: 20px 10px;
            }
        }
    </style>
</head>

<body>

    <br> <br> <br> <br>
    <div class="container1">
        <div class="image-section">
            <img src="{{asset('assets/images/banner1.png')}}" alt="Banner 1">
        </div>
        <div class="text-section">
            <h1>Welcome to ArtVenture</h1>
            <h4>Art Adventure Starts Here.</h4>
        </div>
    </div>

    <div class="container2">
        <div class="image-section">
            <img src="{{asset('assets/images/banner2.png')}}" alt="Banner 2">
        </div>
        <div class="text-section">
            <h2>Discover diverse artworks and artists that inspire your adventure.</h2>
        </div>
    </div>

    <div class="container1">
        <div class="image-section">
            <img src="{{asset('assets/images/banner3.png')}}" alt="Banner 3">
        </div>
        <div class="text-section">
            <h2>Get ready for an unprecedented art adventure experience.</h2>
        </div>
    </div>

</body>