<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound & Audio Engineering - Vemer Global</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services-gallery.css') }}">
</head>
<body>

    <div class="info-bar">
        <div class="info-left">
            <span>📍 Location: <span id="location">Dar es Salaam, Tanzania</span></span>
        </div>
        <div class="info-right">
            <span>Timezone: <span id="timezone">UTC</span></span>
            <span>Temperature: <span id="temperature">--&deg;C</span></span>
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
        <h1>Sound & Audio Engineering</h1>
        <p>Clear, balanced sound for live events, studios, and audio productions.</p>
    </section>

    <section class="service-detail">
        <p>Our audio engineering services include live sound management, studio setup, and audio production to ensure professional sound quality.</p>
        <ul>
            <li>Sound system installation</li>
            <li>Live event sound management</li>
            <li>Audio recording and production</li>
            <li>Studio setup consultation</li>
        </ul>
    </section>

    <section class="service-gallery" aria-labelledby="audio-gallery-title">
        <div class="service-gallery-heading">
            <p class="service-gallery-eyebrow">Audio production</p>
            <h2 id="audio-gallery-title">Sound built around your event</h2>
            <p>Our audio work covers live sound, equipment setup, and production support.</p>
        </div>
        <div class="service-gallery-grid">
            <figure class="service-gallery-card">
                <img src="{{ asset('Images/sound.jpg') }}" alt="Audio mixing console and sound equipment at a live event" loading="lazy" decoding="async">
                <figcaption>Live sound engineering</figcaption>
            </figure>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Planning an event or recording?</h4>
                <p><a href="/contact">Talk to our audio team</a></p>
                <p><a href="/services">Explore all services</a></p>
            </div>
        </div>
    </footer>
</body>
</html>