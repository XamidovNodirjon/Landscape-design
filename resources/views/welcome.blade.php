<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandscapeDesign - Professional Landscape Architecture</title>
    <meta name="description" content="Professional landscape design services - creating beautiful and functional outdoor spaces">
    <meta name="keywords" content="landscape design, garden planning, irrigation systems, maintenance, outdoor spaces">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <a href="#home" class="logo">
                    <div class="logo-icon">L</div>
                    <span class="logo-text">Uzyo'ko'kalam</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="nav-desktop">
                    <a href="#home" class="nav-link active" data-translate="home">Home</a>
                    <a href="#about" class="nav-link" data-translate="about">About Us</a>
                    <a href="#services" class="nav-link" data-translate="services">Services</a>
                    <a href="#news" class="nav-link" data-translate="news">News</a>
                    <a href="#contact" class="nav-link" data-translate="contact">Contact</a>
                </nav>

                <!-- Phone and Language -->
                <div class="header-right">
                    <a href="tel:+998901234567" class="phone">+998 90 123 45 67</a>
                    <div class="language-switcher">
                        <button class="lang-btn active" data-lang="en">EN</button>
                        <button class="lang-btn" data-lang="ru">RU</button>
                        <button class="lang-btn" data-lang="uz">UZ</button>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div class="mobile-nav-overlay"></div>
        <nav class="mobile-nav">
            <div class="mobile-nav-header">
                <a href="#home" class="logo">
                    <div class="logo-icon">L</div>
                    <span class="logo-text">LandscapeDesign</span>
                </a>
            </div>
            <div class="mobile-nav-content">
                <a href="#home" class="mobile-nav-link" data-translate="home">Home</a>
                <a href="#about" class="mobile-nav-link" data-translate="about">About Us</a>
                <a href="#services" class="mobile-nav-link" data-translate="services">Services</a>
                <a href="#news" class="mobile-nav-link" data-translate="news">News</a>
                <a href="#contact" class="mobile-nav-link" data-translate="contact">Contact</a>
                
                <div class="mobile-contact">
                    <a href="tel:+998901234567" class="mobile-phone">+998 90 123 45 67</a>
                    <div class="mobile-language-switcher">
                        <button class="mobile-lang-btn active" data-lang="en">EN</button>
                        <button class="mobile-lang-btn" data-lang="ru">RU</button>
                        <button class="mobile-lang-btn" data-lang="uz">UZ</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home" class="hero">
            <div class="hero-background"></div>
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title" data-translate="heroTitle">Harmony of Nature and Design</h1>
                    <p class="hero-subtitle" data-translate="heroSubtitle">Professional landscape design to create beautiful and functional spaces</p>
                    <a href="#services" class="hero-btn" data-translate="heroButton">Our Services</a>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-mouse">
                    <div class="scroll-wheel"></div>
                </div>
            </div>
        </section>

        <!-- Services Quick Links -->
        <section class="services-preview">
            <div class="container">
                <h2 class="section-title" data-translate="servicesTitle">Our Services</h2>
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-icon">🌺</div>
                        <h3 class="service-title" data-translate="landscapeDesign">Landscape Design</h3>
                        <p class="service-description">Professional landscape design solutions</p>
                        <a href="#services" class="service-link">Learn More →</a>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">🌸</div>
                        <h3 class="service-title" data-translate="gardenPlanning">Garden Planning</h3>
                        <p class="service-description">Comprehensive garden planning services</p>
                        <a href="#services" class="service-link">Learn More →</a>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon">💧</div>
                        <h3 class="service-title" data-translate="irrigation">Irrigation Systems</h3>
                        <p class="service-description">Modern irrigation system installation</p>
                        <a href="#services" class="service-link">Learn More →</a>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">🛠️</div>
                        <h3 class="service-title" data-translate="maintenance">Maintenance</h3>
                        <p class="service-description">Professional maintenance services</p>
                        <a href="#services" class="service-link">Learn More →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Carousel -->
        <section class="partners">
            <div class="container">
                <h2 class="section-title" data-translate="partnersTitle">Our Partners</h2>
                <div class="partners-carousel">
                    <div class="partners-track">
                        <div class="partner-card">
                            <div class="partner-logo">🌱</div>
                            <h3 class="partner-name">EcoGreen Solutions</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌿</div>
                            <h3 class="partner-name">Nature Design Co.</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🍃</div>
                            <h3 class="partner-name">Green Spaces Ltd.</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌳</div>
                            <h3 class="partner-name">Urban Gardens</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌲</div>
                            <h3 class="partner-name">Landscape Pro</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌾</div>
                            <h3 class="partner-name">Garden Masters</h3>
                        </div>
                        <!-- Duplicate for seamless loop -->
                        <div class="partner-card">
                            <div class="partner-logo">🌱</div>
                            <h3 class="partner-name">EcoGreen Solutions</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌿</div>
                            <h3 class="partner-name">Nature Design Co.</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🍃</div>
                            <h3 class="partner-name">Green Spaces Ltd.</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌳</div>
                            <h3 class="partner-name">Urban Gardens</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌲</div>
                            <h3 class="partner-name">Landscape Pro</h3>
                        </div>
                        <div class="partner-card">
                            <div class="partner-logo">🌾</div>
                            <h3 class="partner-name">Garden Masters</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text" data-aos="fade-right">
                        <h2 class="section-title" data-translate="aboutTitle">About Us</h2>
                        <p class="about-description" data-translate="aboutText">Our organization brings together leading specialists in landscape design. We combine natural environment principles with modern design, making each project unique.</p>
                        <div class="about-stats">
                            <div class="stat">
                                <h3 class="stat-number">500+</h3>
                                <p class="stat-label">Projects Completed</p>
                            </div>
                            <div class="stat">
                                <h3 class="stat-number">15+</h3>
                                <p class="stat-label">Years Experience</p>
                            </div>
                            <div class="stat">
                                <h3 class="stat-number">100+</h3>
                                <p class="stat-label">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-image" data-aos="fade-left">
                        <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop" alt="Landscape Design" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services">
            <div class="container">
                <h2 class="section-title" data-translate="servicesTitle">Our Services</h2>
                <div class="services-detailed">
                    <div class="service-detailed" data-aos="fade-up">
                        <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop" alt="Landscape Design" loading="lazy">
                        <div class="service-content">
                            <h3 class="service-title" data-translate="landscapeDesign">Landscape Design</h3>
                            <p class="service-description">Complete landscape design solutions from concept to implementation</p>
                            <ul class="service-features">
                                <li>Site Analysis</li>
                                <li>Design Planning</li>
                                <li>3D Visualization</li>
                                <li>Implementation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-detailed" data-aos="fade-up" data-aos-delay="100">
                        <img src="/images/bogreja.jpg" alt="Garden Planning" loading="lazy">
                        <div class="service-content">
                            <h3 class="service-title" data-translate="gardenPlanning">Garden Planning</h3>
                            <p class="service-description">Professional garden planning and design services</p>
                            <ul class="service-features">
                                <li>Plant Selection</li>
                                <li>Garden Layout</li>
                                <li>Seasonal Planning</li>
                                <li>Maintenance Guide</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-detailed" data-aos="fade-up" data-aos-delay="200">
                        <img src="/images/sugorish2.jpg" alt="Irrigation Systems" loading="lazy">
                        <div class="service-content">
                            <h3 class="service-title" data-translate="irrigation">Irrigation Systems</h3>
                            <p class="service-description">Modern and efficient irrigation system installation</p>
                            <ul class="service-features">
                                <li>System Design</li>
                                <li>Installation</li>
                                <li>Automation</li>
                                <li>Maintenance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-detailed" data-aos="fade-up" data-aos-delay="300">
                        <img src="/images/texnika.jpg" alt="Maintenance" loading="lazy">
                        <div class="service-content">
                            <h3 class="service-title" data-translate="maintenance">Maintenance</h3>
                            <p class="service-description">Comprehensive landscape maintenance services</p>
                            <ul class="service-features">
                                <li>Regular Care</li>
                                <li>Pruning</li>
                                <li>Fertilization</li>
                                <li>Pest Control</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section id="news" class="news">
            <div class="container">
                <h2 class="section-title" data-translate="newsTitle">Latest News</h2>
                <div class="news-grid">
                    <article class="news-card" data-aos="fade-up">
                        <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop" alt="News" loading="lazy">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-category">Sustainability</span>
                                <span class="news-date">January 15, 2024</span>
                            </div>
                            <h3 class="news-title">New Sustainable Landscaping Initiative Launched</h3>
                            <p class="news-excerpt">We are proud to announce our new sustainability program focused on eco-friendly landscaping solutions.</p>
                            <a href="#" class="news-link" data-translate="readMore">Read More →</a>
                        </div>
                    </article>
                    <article class="news-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop" alt="News" loading="lazy">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-category">Awards</span>
                                <span class="news-date">January 10, 2024</span>
                            </div>
                            <h3 class="news-title">Award-Winning Garden Design Project Completed</h3>
                            <p class="news-excerpt">Our latest residential garden project has won the National Landscape Design Award for innovation and beauty.</p>
                            <a href="#" class="news-link" data-translate="readMore">Read More →</a>
                        </div>
                    </article>
                    <article class="news-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://images.pexels.com/photos/416978/pexels-photo-416978.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop" alt="News" loading="lazy">
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-category">Tips</span>
                                <span class="news-date">January 5, 2024</span>
                            </div>
                            <h3 class="news-title">Spring Maintenance Tips from Our Experts</h3>
                            <p class="news-excerpt">Learn essential spring maintenance tips to keep your landscape healthy and beautiful throughout the season.</p>
                            <a href="#" class="news-link" data-translate="readMore">Read More →</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <h2 class="section-title" data-translate="contactTitle">Contact Us</h2>
                <div class="contact-content">
                    <div class="contact-form-wrapper" data-aos="fade-right">
                        <h3 class="contact-form-title" data-translate="contactForm">Contact Form</h3>
                        <form class="contact-form" id="contactForm">
                            <div class="form-group">
                                <label for="name" data-translate="name">Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" data-translate="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message" data-translate="message">Message</label>
                                <textarea id="message" name="message" rows="6" required></textarea>
                            </div>
                            <button type="submit" class="form-submit" data-translate="send">Send Message</button>
                        </form>
                    </div>
                    <div class="contact-info" data-aos="fade-left">
                        <h3>Get in Touch</h3>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-details">
                                <h4 data-translate="address">Address</h4>
                                <p>123 Landscape Avenue<br>Tashkent, Uzbekistan 100000</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div class="contact-details">
                                <h4 data-translate="phone">Phone</h4>
                                <p>+998 90 123 45 67<br>+998 71 123 45 67</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>info@landscapedesign.uz<br>contact@landscapedesign.uz</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">🕒</div>
                            <div class="contact-details">
                                <h4>Working Hours</h4>
                                <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 9:00 AM - 4:00 PM<br>Sun: Closed</p>
                            </div>
                        </div>
                        <div class="map-placeholder">
                            <div class="map-content">
                                <div class="map-icon">🗺️</div>
                                <p>Interactive Map</p>
                                <small>Google Maps integration would be implemented here</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta">
            <div class="container">
                <div class="cta-content" data-aos="fade-up">
                    <h2 class="cta-title">Ready to Transform Your Space?</h2>
                    <p class="cta-subtitle">Get in touch with our expert team to discuss your landscape design project</p>
                    <a href="#contact" class="cta-btn" data-translate="contactTitle">Contact Us</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="#home" class="logo">
                        <div class="logo-icon">L</div>
                        <span class="logo-text">LandscapeDesign</span>
                    </a>
                    <p class="footer-description" data-translate="footerText">Professional landscape design services</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home" data-translate="home">Home</a></li>
                        <li><a href="#about" data-translate="about">About Us</a></li>
                        <li><a href="#services" data-translate="services">Services</a></li>
                        <li><a href="#news" data-translate="news">News</a></li>
                        <li><a href="#contact" data-translate="contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4 data-translate="contact">Contact</h4>
                    <p><strong data-translate="phone">Phone:</strong> +998 90 123 45 67</p>
                    <p><strong>Email:</strong> info@landscapedesign.uz</p>
                    <p><strong data-translate="address">Address:</strong> Tashkent, Uzbekistan</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 LandscapeDesign. <span data-translate="allRightsReserved">All rights reserved</span>.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/translations.js"></script>
    <script src="js/main.js"></script>
</body>
</html>