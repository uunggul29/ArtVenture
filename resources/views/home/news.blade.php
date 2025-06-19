<head>
    <style>
        .text-gradient {
            background: linear-gradient(to right, #4facfe, #8e44ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #news {
            background-color: #f8f9fa;
            padding: 4rem 0;
        }

        #news .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1100px;
            margin: 0 auto;
        }

        .news-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .news-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .news-content {
            padding: 1rem 1.5rem 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .news-date {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .news-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #4facfe;
        }

        .news-excerpt {
            flex-grow: 1;
            color: #555;
            font-size: 1rem;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .news-readmore {
            align-self: flex-start;
            font-weight: 600;
            color: #8e44ad;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .news-readmore:hover {
            color: #4facfe;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section class="section" id="news">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold">Latest <span class="text-gradient">News</span></h1>
                <hr>
            </div>
            <div class="news-container">

                <article class="news-card">
                    <img src="{{asset('assets/images/art-exhibition.jpeg')}}" alt="Art Exhibition" class="news-image" />
                    <div class="news-content">
                        <time class="news-date" datetime="2025-06-01">June 1, 2025</time>
                        <h2 class="news-title">Upcoming Art Exhibition Celebrates Global Cultures</h2>
                        <p class="news-excerpt">Join us as we showcase diverse artworks from Asia, Europe, America, and more in a vibrant global exhibition.</p>
                        <a class="news-readmore">Read more →</a>    
                    </div>
                </article>

                <article class="news-card">
                    <img src="{{asset('assets/images/artist-community.jpg')}}" alt="Artist Community" class="news-image" />
                    <div class="news-content">
                        <time class="news-date" datetime="2025-05-20">May 20, 2025</time>
                        <h2 class="news-title">Building Artistic Communities Across Continents</h2>
                        <p class="news-excerpt">Discover how ArtVenture connects artists worldwide to inspire collaboration and cultural exchange.</p>
                        <a class="news-readmore">Read more →</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="{{asset('assets/images/digital-art.jpg')}}" alt="Digital Art" class="news-image" />
                    <div class="news-content">
                        <time class="news-date" datetime="2025-05-10">May 10, 2025</time>
                        <h2 class="news-title">The Rise of Digital Art in the Modern Era</h2>
                        <p class="news-excerpt">Explore how digital tools are transforming traditional art into innovative and accessible expressions.</p>
                        <a class="news-readmore">Read more →</a>
                    </div>
                </article>

            </div>
        </div>
    </section>
</body>