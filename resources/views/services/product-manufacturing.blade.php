<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Manufacturing - Vemer Global</title>
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
        <h1>Product Manufacturing</h1>
        <p>Quality products, thoughtful packaging, and production you can trust.</p>
    </section>

    <section class="service-detail">
        <p>We manufacture high-quality products like N-Smart Wash liquid soap. Our production process ensures safety, quality, and branding excellence.</p>
        <ul>
            <li>Liquid soap production (including N-Smart Wash)</li>
            <li>Packaging and branding solutions</li>
            <li>Quality-controlled production processes</li>
        </ul>
    </section>

    <section class="service-gallery" aria-labelledby="manufacturing-gallery-title">
        <div class="service-gallery-heading">
            <p class="service-gallery-eyebrow">From production to presentation</p>
            <h2 id="manufacturing-gallery-title">Made with quality in mind</h2>
            <p>See how product manufacturing, packaging, and branding come together.</p>
        </div>
        <div class="service-gallery-grid">
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/soap.jpg') }}" alt="Packaged liquid soap products" loading="lazy" decoding="async">
                <figcaption>Liquid soap products</figcaption>
            </figure>
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/print.jpg') }}" alt="Printing equipment producing colorful materials" loading="lazy" decoding="async">
                <figcaption>Packaging and print production</figcaption>
            </figure>
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/logo.jpg') }}" alt="Colorful graphic identity design" loading="lazy" decoding="async">
                <figcaption>Product branding</figcaption>
            </figure>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Ready to make a product?</h4>
                <p><a href="/contact">Talk to us about manufacturing</a></p>
                <p><a href="/services">Explore all services</a></p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('Js/Weather.js') }}"></script>
</body>
</html>