<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davlat Landscape Design Korxonasi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #2d5a27, #4a7c59);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        nav a:hover, nav a.active {
            color: #90EE90;
            text-shadow: 0 0 5px rgba(144, 238, 144, 0.5);
        }

        /* Main Content */
        main {
            margin-top: 80px;
            min-height: calc(100vh - 80px);
        }

        .section {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(45, 90, 39, 0.8), rgba(74, 124, 89, 0.8)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%234a7c59" width="1200" height="600"/><circle fill="%2390EE90" opacity="0.1" cx="200" cy="150" r="100"/><circle fill="%2390EE90" opacity="0.1" cx="800" cy="300" r="150"/><circle fill="%2390EE90" opacity="0.1" cx="1000" cy="100" r="80"/></svg>');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .cta-button {
            background: linear-gradient(45deg, #90EE90, #98FB98);
            color: #2d5a27;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(144, 238, 144, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(144, 238, 144, 0.4);
        }

        /* Content Sections */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title {
            font-size: 2.5rem;
            color: #2d5a27;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #90EE90, #2d5a27);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* Grid Layouts */
        .grid {
            display: grid;
            gap: 2rem;
            margin-top: 3rem;
        }

        .grid-2 { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .grid-3 { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }

        .card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-top: 4px solid #90EE90;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .card h3 {
            color: #2d5a27;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .card p {
            color: #666;
            line-height: 1.8;
        }

        /* Services Icons */
        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #90EE90, #98FB98);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: #2d5a27;
        }

        /* News Cards */
        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .news-image {
            height: 200px;
            background: linear-gradient(45deg, #4a7c59, #90EE90);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-date {
            color: #90EE90;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .news-title {
            color: #2d5a27;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        /* Statistics */
        .stats {
            background: linear-gradient(135deg, #2d5a27, #4a7c59);
            color: white;
            padding: 4rem 2rem;
            margin: 4rem 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #90EE90;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Footer */
        footer {
            background: #2d5a27;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            color: #90EE90;
            margin-bottom: 1rem;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(144, 238, 144, 0.3);
            opacity: 0.8;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .container {
                padding: 2rem 1rem;
            }

            main {
                margin-top: 120px;
            }
        }

        /* Animations */
        .fade-in {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">🌿 Davlat Landscape Design</div>
            <nav>
                <ul>
                    <li><a href="#" onclick="showSection('home')" class="nav-link active">Asosiy</a></li>
                    <li><a href="#" onclick="showSection('about')" class="nav-link">Biz haqimizda</a></li>
                    <li><a href="#" onclick="showSection('services')" class="nav-link">Bizning xizmatlar</a></li>
                    <li><a href="#" onclick="showSection('news')" class="nav-link">Yangiliklar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Home Section -->
        <section id="home" class="section active">
            <div class="hero">
                <div class="hero-content fade-in">
                    <h1>Professional Landscape Design</h1>
                    <p>Davlat standartlariga mos holda, zamonaviy va ekologik toza landshaft dizayni xizmatlarini taqdim etamiz</p>
                    <button class="cta-button" onclick="showSection('about')">Batafsil ma'lumot</button>
                </div>
            </div>

            <div class="stats">
                <div class="stats-grid fade-in">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Muvaffaqiyatli loyihalar</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Yillik tajriba</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Malakali mutaxassislar</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Mijozlar qoniqishi</span>
                    </div>
                </div>
            </div>

            <div class="container">
                <h2 class="section-title">Bizning afzalliklarimiz</h2>
                <div class="grid grid-3">
                    <div class="card fade-in">
                        <div class="service-icon">🏛️</div>
                        <h3>Davlat standartlari</h3>
                        <p>Barcha loyihalarni davlat standartlari va me'yorlariga qat'iy rioya qilgan holda amalga oshiramiz</p>
                    </div>
                    <div class="card fade-in">
                        <div class="service-icon">🌱</div>
                        <h3>Ekologik yondashuv</h3>
                        <p>Tabiatni muhofaza qilish va sustainable development tamoyillariga asoslanib ishlaymiz</p>
                    </div>
                    <div class="card fade-in">
                        <div class="service-icon">⚡</div>
                        <h3>Zamonaviy texnologiyalar</h3>
                        <p>Eng so'nggi texnologiyalar va innovatsion yechimlardan foydalanib loyihalarni amalga oshiramiz</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section">
            <div class="container">
                <h2 class="section-title">Biz haqimizda</h2>
                
                <div class="grid grid-2">
                    <div class="card fade-in">
                        <h3>Bizning missiyamiz</h3>
                        <p>Biz O'zbekiston Respublikasining landscape dizayn sohasidagi yetakchi davlat korxonasimiz. Bizning asosiy maqsadimiz - mamlakatimizning shaharlari va qishloqlarini yanada go'zal va yashashga qulay qilish.</p>
                        <p>15 yildan ortiq tajribaga ega bo'lgan mutaxassislarimiz har bir loyihani professional darajada amalga oshiradilar.</p>
                    </div>
                    
                    <div class="card fade-in">
                        <h3>Bizning qadriyatlarimiz</h3>
                        <p><strong>Sifat:</strong> Har bir loyihada yuqori sifat va professional yondashuvni ta'minlaymiz</p>
                        <p><strong>Innovatsiya:</strong> Zamonaviy texnologiyalar va kreativ yechimlardan foydalanib, noyob dizaynlar yaratamiz</p>
                        <p><strong>Mas'uliyat:</strong> Tabiatni muhofaza qilish va ekologik muvozanatni saqlash bizning bosh vazifamiz</p>
                    </div>
                </div>

                <div style="margin-top: 4rem;">
                    <div class="card fade-in">
                        <h3>Bizning jamoamiz</h3>
                        <p>Korxonamizda 50 dan ortiq yuqori malakali mutaxassis ishlaydi:</p>
                        <div class="grid grid-3" style="margin-top: 2rem;">
                            <div style="text-align: center; padding: 1rem;">
                                <div class="service-icon">👨‍💼</div>
                                <h4>Arxitektorlar</h4>
                                <p>15 nafar tajribali arxitektor</p>
                            </div>
                            <div style="text-align: center; padding: 1rem;">
                                <div class="service-icon">🌿</div>
                                <h4>Landscape dizaynerlar</h4>
                                <p>20 nafar kreativ dizayner</p>
                            </div>
                            <div style="text-align: center; padding: 1rem;">
                                <div class="service-icon">🔧</div>
                                <h4>Muhandislar</h4>
                                <p>15 nafar texnik mutaxassis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="section">
            <div class="container">
                <h2 class="section-title">Bizning xizmatlar</h2>
                
                <div class="grid grid-2">
                    <div class="card fade-in">
                        <div class="service-icon">🏗️</div>
                        <h3>Landscape dizayn loyihasi</h3>
                        <p>Parklar, bog'lar, maydonlar va boshqa yashil hududlar uchun to'liq landscape dizayn loyihalarini tayyorlaymiz. Har bir loyiha O'zbekiston iqlim sharoitlari va davlat standartlariga mos ravishda ishlab chiqiladi.</p>
                    </div>
                    
                    <div class="card fade-in">
                        <div class="service-icon">🌳</div>
                        <h3>Yashil nasozlik ishlari</h3>
                        <p>Professional yashil nasozlik xizmatlarini taqdim etamiz. Daraxt va butalar ekish, gulzorlar yaratish, maysazor o'rnatish va barcha turdagi o'simliklarni parvarish qilish xizmatlarimizga kiradi.</p>
                    </div>
                    
                    <div class="card fade-in">
                        <div class="service-icon">💧</div>
                        <h3>Sug'orish tizimlari</h3>
                        <p>Zamonaviy sug'orish tizimlarini loyihalash va o'rnatish xizmatlarini ko'rsatamiz. Avtomat sug'orish tizimlari, tomchilatib sug'orish va suv tejovchi texnologiyalarni qo'llaymiz.</p>
                    </div>
                    
                    <div class="card fade-in">
                        <div class="service-icon">🛤️</div>
                        <h3>Yo'laklar va maydonlar</h3>
                        <p>Go'zal va bardoshli yo'laklar, maydonlar va dam olish joylarini yaratamiz. Tabiiy tosh, beton plitka va boshqa zamonaviy materiallardan foydalanib, chiroyli yurish yo'laklarini quramiz.</p>
                    </div>
                    
                    <div class="card fade-in">
                        <div class="service-icon">💡</div>
                        <h3>Yoritish tizimlari</h3>
                        <p>Landscape yoritish tizimlarini loyihalash va o'rnatish. LED texnologiyasidan foydalanib, energiya tejovchi va muhit uchun xavfsiz yoritish yechimlarini taklif etamiz.</p>
                    </div>
                    
                    <div class="card fade-in">
                        <div class="service-icon">🔧</div>
                        <h3>Texnik xizmat ko'rsatish</h3>
                        <p>Yaratilgan landscape obyektlariga doimiy texnik xizmat ko'rsatish va parvarish qilish xizmatlarini taqdim etamiz. Bu sizning investitsiyangizni uzoq muddat himoya qilishni ta'minlaydi.</p>
                    </div>
                </div>

                <div style="margin-top: 4rem;">
                    <div class="card fade-in" style="text-align: center; background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
                        <h3 style="color: #2d5a27; margin-bottom: 2rem;">Loyiha bosqichlari</h3>
                        <div class="grid grid-3">
                            <div>
                                <div class="service-icon">📋</div>
                                <h4>1. Konsultatsiya</h4>
                                <p>Mijoz bilan uchrashuv va talablarni aniqlash</p>
                            </div>
                            <div>
                                <div class="service-icon">🎨</div>
                                <h4>2. Dizayn</h4>
                                <p>3D vizualizatsiya va loyiha tayyorlash</p>
                            </div>
                            <div>
                                <div class="service-icon">⚒️</div>
                                <h4>3. Amalga oshirish</h4>
                                <p>Professional jamoamiz tomonidan ishlarni bajarish</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section id="news" class="section">
            <div class="container">
                <h2 class="section-title">So'ngi yangiliklar</h2>
                
                <div class="grid grid-3">
                    <div class="news-card fade-in">
                        <div class="news-image">📰</div>
                        <div class="news-content">
                            <div class="news-date">15 Sentyabr, 2025</div>
                            <h3 class="news-title">Toshkentda yangi eco-park ochildi</h3>
                            <p>Bizning jamoamiz tomonidan loyihalashtirilgan 50 gektar maydonli eco-park rasman ochildi. Loyiha zamonaviy landscape dizayni va ekologik yondashuvning ajoyib namunasidir.</p>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image">🏆</div>
                        <div class="news-content">
                            <div class="news-date">10 Sentyabr, 2025</div>
                            <h3 class="news-title">Xalqaro mukofotga sazovor bo'ldik</h3>
                            <p>"Eng yaxshi landscape dizayni" nominatsiyasida xalqaro tanlovda g'olib chiqdik. Bu bizning professional jamoamizning yuqori malakasining isbotidir.</p>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image">🌱</div>
                        <div class="news-content">
                            <div class="news-date">5 Sentyabr, 2025</div>
                            <h3 class="news-title">Yangi texnologiyalar joriy etildi</h3>
                            <p>Korxonamizda suv tejovchi sug'orish tizimlari va "aqlli" landscape boshqaruv texnologiyalari joriy etildi. Bu xizmat sifatini yanada oshirishga yordam beradi.</p>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image">👥</div>
                        <div class="news-content">
                            <div class="news-date">1 Sentyabr, 2025</div>
                            <h3 class="news-title">Yangi mutaxassislar jamoaga qo'shildi</h3>
                            <p>Korxonamizga 10 nafar yangi malakali landscape dizayner va muhandis ishga qabul qilindi. Bu bizning imkoniyatlarimizni yanada kengaytirishga imkon beradi.</p>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image">🏛️</div>
                        <div class="news-content">
                            <div class="news-date">25 Avgust, 2025</div>
                            <h3 class="news-title">Davlat dasturi doirasidagi loyiha</h3>
                            <p>"Yashil O'zbekiston" dasturi doirasida 20 ta shahar parkini yangilash bo'yicha katta loyiha boshlandi. Ishlar 2026-yil bahorida tugallanishi rejalashtirilgan.</p>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image">📚</div>
                        <div class="news-content">
                            <div class="news-date">20 Avgust, 2025</div>
                            <h3 class="news-title">Talabalar uchun amaliyot dasturi</h3>
                            <p>Korxonamiz universitetlar bilan hamkorlikda talabalar uchun amaliyot dasturi ishga tushirildi. Bu kelajak avlod uchun professional tajriba olish imkoniyatini yaratadi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Aloqa ma'lumotlari</h3>
                <p>📍 Manzil: Toshkent sh., Chilonzor tumani, Bunyodkor ko'chasi, 1-uy</p>
                <p>📞 Telefon: +998 71 123-45-67</p>
                <p>✉️ Email: info@landscape.uz</p>
                <p>🌐 Veb-sayt: www.landscape.uz</p>
            </div>
            
            <div class="footer-section">
                <h3>Ish vaqti</h3>
                <p>Dushanba - Juma: 9:00 - 18:00</p>
                <p>Shanba: 9:00 - 14:00</p>
                <p>Yakshanba: Dam olish kuni</p>
                <p>Konsultatsiya: 24/7 online</p>
            </div>
            
            <div class="footer-section">
                <h3>Qo'shimcha</h3>
                <p>Bizning barcha xizmatlar davlat litsenziyasiga ega</p>
                <p>10 yilgacha kafolat beramiz</p>
                <p>Bepul konsultatsiya</p>
                <p>Tez va sifatli xizmat</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Davlat Landscape Design Korxonasi. Barcha huquqlar himoyalangan.</p>
        </div>
    </footer>

    <script>
        function showSection(sectionName) {
            // Hide all sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show selected section
            document.getElementById(sectionName).classList.add('active');
            
            // Update navigation
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            
            event.target.classList.add('active');
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Add animation to cards
            setTimeout(() => {
                const cards = document.querySelectorAll(`#${sectionName} .card, #${sectionName} .news-card`);
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.animation = 'fadeInUp 0.6s ease-out';
                    }, index * 100);
                });
            }, 100);
        }

        // Add smooth scrolling and animations on load
        window.addEventListener('load', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.8s ease-out';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.card, .news-card, .fade-in').forEach(el => {
                observer.observe(el);
            });
        });

        // Add mobile menu toggle functionality
        function toggleMobileMenu() {
            const nav = document.querySelector('nav ul');
            nav.classList.toggle('mobile-active');
        }

        // Add scroll effect to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(45, 90, 39, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #2d5a27, #4a7c59)';
                header.style.backdropFilter = 'none';
            }
        });

        // Add hover effects for service cards
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });

        // Add counter animation for statistics
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                let current = 0;
                const increment = target / 50;
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (counter.textContent.includes('%')) {
                            counter.textContent = Math.ceil(current) + '%';
                        } else if (counter.textContent.includes('+')) {
                            counter.textContent = Math.ceil(current) + '+';
                        } else {
                            counter.textContent = Math.ceil(current);
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = counter.textContent;
                    }
                };
                updateCounter();
            });
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        window.addEventListener('load', () => {
            const statsSection = document.querySelector('.stats');
            if (statsSection) {
                statsObserver.observe(statsSection);
            }
        });
    
    </script>
</body>
</html>