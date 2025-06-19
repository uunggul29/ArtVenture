<head>
    <style>
        body {
            font-family: 'EB Garamond', serif;
        }
        
        .text-gradient {
            background: linear-gradient(to right, #4facfe, #8e44ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card:active {
            transform: scale(0.97) rotate(-1deg);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <section class="section py-5 bg-light" id="product">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold">Our <span class="text-gradient">Artworks</span></h1>
                <hr>
            </div>
            <div class="row">
                @foreach ($produk as $produks)
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="{{ url('produk_details', $produks->id) }}" style="text-decoration: none; color: inherit;">
                        <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden">
                            <img src="produk/{{$produks->image}}" class="card-img-top" alt="{{$produks->title}}" style="height: 250px; object-fit: cover;">
                            <div class="card-body text-center bg-white">
                                <h5 class="card-title fw-bold">{{$produks->title}}</h5>
                                <h6 class="mb-1">
                                    <span class="badge bg-secondary text-white">
                                        Category: {{$produks->category}}
                                    </span>
                                </h6>
                                <h6 class="text-primary fw-semibold mb-3">${{ number_format($produks->price, 0, ',', '.') }}</h6>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{url('add_cart', $produks->id)}}" onclick="return confirm('Add to Your Cart?');" class="btn btn-success btn-sm">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </section>
</body>