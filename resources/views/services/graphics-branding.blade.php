<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphics & Branding - Vemer Global</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services-gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>

    <div class="info-bar">
        <div class="info-left">
            <span>📍 Location: <span id="location">Dar es Salaam, Tanzania</span></span>
        </div>
        <div class="info-right">
            <span>Local time: <span id="timezone">Loading...</span></span>
            <span>Temperature: <span id="temperature" aria-live="polite">--&deg;C</span></span>
            <span>Weather: <span id="weather" aria-live="polite">Loading...</span></span>
        </div>
    </div>

    <nav>
        <a href="/" class="logo-link">
            <div class="logo">
                <img src="{{ asset('Images/logo 1.jpg') }}" alt="Vemer Global Investment Company Logo" class="logo-img">
                <span class="logo-text">Vemer Global Investment Company</span>
            </div>
        </a>
        <ul class="nav-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Service</a></li>
            <li><a href="/contact">Contacts</a></li>
        </ul>
    </nav>

    <section class="hero-section">
        <h1>Graphics & Branding Solutions</h1>
        <p>Build a memorable visual identity across print and digital channels.</p>
    </section>

    <section class="service-detail">
        <p>We offer complete branding solutions, including logo design, marketing materials, and social media graphics to elevate your brand identity.</p>
        <ul>
            <li>Logo design</li>
            <li>Branding and identity development</li>
            <li>Printing solutions</li>
            <li>Marketing materials (flyers, banners, social media designs)</li>
        </ul>
    </section>

    <section class="service-gallery" aria-labelledby="branding-gallery-title">
        <div class="service-gallery-heading">
            <p class="service-gallery-eyebrow">Creative portfolio</p>
            <h2 id="branding-gallery-title">Design that brings brands to life</h2>
            <p>Explore examples of identity design and print production for business communication.</p>
        </div>
        <div class="service-gallery-grid">
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/logo 1.jpg') }}" alt="Vemer Global logo mark" loading="lazy" decoding="async">
                <figcaption>Logo and identity design</figcaption>
            </figure>
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/logo.jpg') }}" alt="Colorful sample logo design" loading="lazy" decoding="async">
                <figcaption>Brand concepts</figcaption>
            </figure>
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/print.jpg') }}" alt="Commercial printing press producing color materials" loading="lazy" decoding="async">
                <figcaption>Print and marketing materials</figcaption>
            </figure>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Give your brand a fresh look</h4>
                <p><a href="/contact">Discuss a design project</a></p>
                <p><a href="/services">Explore all services</a></p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('Js/Weather.js') }}"></script>
</body>
</html>