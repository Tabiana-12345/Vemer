<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract-Based Business Services - Vemer Global</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services-gallery.css') }}">
</head>
<body>

    <!-- Info bar -->
    <div class="info-bar">
        <div class="info-left">
            <span>📍 Location: <span id="location">Dar es Salaam, Tanzania</span></span>
        </div>
        <div class="info-right">
            <span>Timezone: <span id="timezone">UTC</span></span>
            <span>Temperature: <span id="temperature">--&deg;C</span></span>
        </div>
    </div>

    <!-- Navigation -->
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
        <h1>Contract-Based Business Services</h1>
        <p>Reliable project delivery for public and private sector clients.</p>
    </section>

    <section class="service-detail">
        <p>We execute projects on a contract basis for government institutions, private companies, and individuals across multiple sectors. Our team ensures quality, timeliness, and scalable solutions.</p>
        <ul>
            <li>Professional project execution</li>
            <li>Multi-sector expertise</li>
            <li>Reliable and scalable solutions</li>
        </ul>
    </section>

    <section class="service-gallery" aria-labelledby="contract-gallery-title">
        <div class="service-gallery-heading">
            <p class="service-gallery-eyebrow">Project capabilities</p>
            <h2 id="contract-gallery-title">Work across multiple sectors</h2>
            <p>Explore examples of the business, technology, and production work we support through contract delivery.</p>
        </div>
        <div class="service-gallery-grid">
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/background.jpg') }}" alt="Modern commercial buildings" loading="lazy" decoding="async">
                <figcaption>Business and institutional projects</figcaption>
            </figure>
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/server 1.jpg') }}" alt="Technician working on server equipment" loading="lazy" decoding="async">
                <figcaption>Technology implementation</figcaption>
            </figure>
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/print.jpg') }}" alt="Commercial printing equipment" loading="lazy" decoding="async">
                <figcaption>Production and print services</figcaption>
            </figure>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Continue exploring</h4>
                <p><a href="/services">All services</a></p>
                <p><a href="/contact">Contact us about a project</a></p>
            </div>
        </div>
    </footer>
</body>
</html>