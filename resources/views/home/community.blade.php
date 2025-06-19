<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        .community-wrapper {
            position: relative;
        }

        .community-scroll {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 1rem;
            padding-bottom: 10px;
        }

        .community-scroll::-webkit-scrollbar {
            display: none;
        }

        .community-card {
            flex: 0 0 300px;
            min-width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .community-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .scroll-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #ffffff;
            border: none;
            padding: 12px 16px;
            border-radius: 50%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            z-index: 10;
            font-size: 18px;
        }

        .scroll-btn.left {
            left: -20px;
        }

        .scroll-btn.right {
            right: -20px;
        }

        .text-gradient {
            background: linear-gradient(to right, #4facfe, #8e44ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @media (max-width: 768px) {
            .scroll-btn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <section class="section py-5 bg-light" id="community">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold">Global <span class="text-gradient">Community</span></h1>
                <hr>
            </div>

            <div class="community-wrapper">
                <!-- Tombol kiri -->
                <button class="scroll-btn left" onclick="scrollCommunity(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Scrollable content -->
                <div class="community-scroll">

                    <!-- Cards -->
                    <div class="community-card">
                        <i class="fas fa-globe-asia fa-3x text-primary mb-3"></i>
                        <h4 class="fw-bold text-primary">Asia</h4><br>
                        <p class="text-muted">Explore rich traditions and modern creativity from Asia, where ancient heritage meets innovation.</p><br>
                        <a class="btn btn-outline-primary rounded-pill px-4 mt-auto">Join Community</a>
                    </div>

                    <div class="community-card">
                        <i class="fas fa-globe-europe fa-3x text-primary mb-3"></i>
                        <h4 class="fw-bold text-primary">Europe</h4><br>
                        <p class="text-muted">Home to timeless classics and bold modern art movements shaping the global art scene.</p><br>
                        <a class="btn btn-outline-primary rounded-pill px-4 mt-auto">Join Community</a>
                    </div>

                    <div class="community-card">
                        <i class="fas fa-globe-americas fa-3x text-primary mb-3"></i>
                        <h4 class="fw-bold text-primary">America</h4><br>
                        <p class="text-muted">Diverse artistic voices blending indigenous roots and vibrant contemporary culture.</p><br>
                        <a class="btn btn-outline-primary rounded-pill px-4 mt-auto">Join Community</a>
                    </div>

                    <div class="community-card">
                        <i class="fas fa-globe-africa fa-3x text-primary mb-3"></i>
                        <h4 class="fw-bold text-primary">Africa</h4><br>
                        <p class="text-muted">Vibrant art reflecting deep traditions and the continent’s cultural diversity.</p><br>
                        <a class="btn btn-outline-primary rounded-pill px-4 mt-auto">Join Community</a>
                    </div>

                    <div class="community-card">
                        <i class="fas fa-globe fa-3x text-primary mb-3"></i>
                        <h4 class="fw-bold text-primary">Australia</h4><br>
                        <p class="text-muted">A unique mix of ancient Aboriginal art and contemporary Australian styles.</p><br>
                        <a class="btn btn-outline-primary rounded-pill px-4 mt-auto">Join Community</a>
                    </div>

                </div>

                <!-- Tombol kanan -->
                <button class="scroll-btn right" onclick="scrollCommunity(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- JavaScript Scroll -->
    <script>
        function scrollCommunity(direction) {
            const container = document.querySelector('.community-scroll');
            const scrollAmount = 320;
            container.scrollBy({
                left: scrollAmount * direction,
                behavior: 'smooth'
            });
        }
    </script>
</body>