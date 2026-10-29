<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vemer Global Investment Company</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    <!-- Timezone and Temperature Info Bar -->
    <div class="info-bar">
        <div class="info-left">
            <span>📍 Location: <span id="location">Dar es Salaam, Tanzania</span></span>
        </div>
        <div class="info-right">
            <span>Timezone: <span id="timezone">UTC</span></span>
            <span>Temperature: <span id="temperature">--°C</span></span>
        </div>
    </div>

    <!-- Navigation -->
    <nav>
        <a href="/" class="logo-link">
            <div class="logo">
                <img src="{{ asset('Images/logo 1.jpg') }}" alt="Vemer Global Investment Company" class="logo-img">
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

    <!-- Hero Section -->
    <section class="hero">
        <h1>Vemer Global Investment</h1>
        <h2>Build & Grow Business</h2>
        <form class="hero-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit">Sign Up</button>
        </form>
        <!-- Animated Ads Section -->
        <div class="marquee">
            <div class="marquee-content">
                <span>🖥️ ICT Services</span>
                <span>🎨 Graphics & Design</span>
                <span>✨ Branding Solutions</span>
                <span>🖨️ Printing Services</span>
                <span>📋 Contract-Based Business Services</span>
                <span>🖥️ ICT Services</span>
                <span>🎨 Graphics & Design</span>
                <span>✨ Branding Solutions</span>
                <span>🖨️ Printing Services</span>
                <span>📋 Contract-Based Business Services</span>
                <span>🖥️ ICT Services</span>
                <span>🎨 Graphics & Design</span>
                <span>✨ Branding Solutions</span>
                <span>🖨️ Printing Services</span>
                <span>📋 Contract-Based Business Services</span>
            </div>
        </div>
    </section>

    <!-- Signup Section -->
    <section class="signup-section">
        <div class="signup-left">
            <div class="signup-benefits">
                <h3>Why Join Vemer Global?</h3>
                <div class="benefit-item">
                    <span class="benefit-icon">🌍</span>
                    <h4>Multi-sector Expertise</h4>
                    <p>We operate across ICT, manufacturing, graphics, and audio engineering with proven expertise in
                        each industry.</p>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">👨‍💼</span>
                    <h4>Professional & Experienced Team</h4>
                    <p>Our skilled professionals bring years of experience and dedication to deliver exceptional
                        results.</p>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">🛡️</span>
                    <h4>Secure & Trusted</h4>
                    <p>Your investments are protected with our advanced security measures and transparent operations.
                    </p>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">🌍</span>
                    <h4>Global Opportunities</h4>
                    <p>Access international investment opportunities and expand your business worldwide.</p>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">💡</span>
                    <h4>Innovative & Technology-Driven</h4>
                    <p>We embrace cutting-edge technology and creative solutions to stay ahead of industry standards.
                    </p>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">💰</span>
                    <h4>Competitive Pricing</h4>
                    <p>Get premium quality services at affordable rates without compromising on excellence.</p>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">⭐</span>
                    <h4>Quality & Satisfaction</h4>
                    <p>Your satisfaction is our priority. We maintain the highest standards in every project we
                        undertake.</p>
                </div>
            </div>
        </div>
        <div class="signup-right">
            <h3>Sign Up Now!</h3>
            <p>Enter your email address to create your account on our site more.. info and services and Products</p>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <button type="submit" class="signup-button">Sign Up</button>
            </form>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <!-- Quick Links -->
            <div class="footer-section">
                <h4>Quick Links</h4>
                <p><a href="/">Home</a></p>
                <p><a href="/about">About Us</a></p>
                <p><a href="/services">Services</a></p>
                <p><a href="tel:+255768052332">📞 +255768052332</a></p>
                <p><a href="mailto:vemerglobal@gmail.com">📧 vemerglobal@gmail.com</a></p>
            </div>

            <!-- Follow Me -->
            <div class="footer-section">
                <h4>Follow Me</h4>
                <div class="social-media">
                    <a href="https://youtu.be/KUOMo4gbN8o?si=YjnU02OuAuaBCo5M" class="social-icon youtube"
                        title="YouTube">
                        <svg viewBox="0 0 24 24" fill="white">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" class="social-icon linkedin" title="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="white">
                            <path
                                d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.86 3.37-1.86 3.6 0 4.27 2.37 4.27 5.46v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.45c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon facebook" title="Facebook">
                        <svg viewBox="0 0 24 24" fill="white">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon instagram" title="Instagram">
                        <svg viewBox="0 0 24 24" fill="white">
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0m5.521 17.05c-1.887.086-2.733.084-8.051.084-5.318 0-6.164.002-8.051-.084C3.654 16.989 2.917 15.9 2.917 13.389V10.611C2.917 8.1 3.654 7.011 4.919 6.95c1.887-.086 2.733-.084 8.051-.084 5.318 0 6.164-.002 8.051.084 1.265.061 2.002 1.15 2.002 3.661v2.778c0 2.511-.737 3.6-2.002 3.661m-3.155-6.814a4.25 4.25 0 1 0 .001 8.501 4.25 4.25 0 0 0-.001-8.501m4.428-1.146a.994.994 0 1 0 0 1.988.994.994 0 0 0 0-1.988" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Subscribe -->
            <div class="footer-section">
                <h4>Subscribe</h4>
                <p>Get the latest updates directly to your inbox.</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Your Email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        </div>

    </footer>
    <div class="copyright">
        <p>@copyright2025</p>
    </div>

    <script src="{{ asset('Js/Index.js') }}"></script>
</body>

</html>