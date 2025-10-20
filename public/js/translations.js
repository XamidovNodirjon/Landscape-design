// Translation data
const translations = {
    en: {
        // Navigation
        home: 'Home',
        about: 'About Us',
        services: 'Services',
        news: 'News',
        contact: 'Contact',
        
        // Hero section
        heroTitle: 'Harmony of Nature and Design',
        heroSubtitle: 'Professional landscape design to create beautiful and functional spaces',
        heroButton: 'Our Services',
        
        // Partners
        partnersTitle: 'Our Partners',
        
        // Services
        servicesTitle: 'Our Services',
        landscapeDesign: 'Landscape Design',
        gardenPlanning: 'Garden Planning',
        irrigation: 'Irrigation Systems',
        maintenance: 'Maintenance',
        
        // About
        aboutTitle: 'About Us',
        aboutText: 'Our organization brings together leading specialists in landscape design. We combine natural environment principles with modern design, making each project unique.',
        
        // Contact
        contactTitle: 'Contact Us',
        contactForm: 'Contact Form',
        name: 'Name',
        email: 'Email',
        message: 'Message',
        send: 'Send Message',
        address: 'Address',
        phone: 'Phone',
        
        // News
        newsTitle: 'Latest News',
        readMore: 'Read More',
        
        // Footer
        footerText: 'Professional landscape design services',
        allRightsReserved: 'All rights reserved',
    },
    ru: {
        // Navigation
        home: 'Главная',
        about: 'О нас',
        services: 'Услуги',
        news: 'Новости',
        contact: 'Контакты',
        
        // Hero section
        heroTitle: 'Гармония природы и дизайна',
        heroSubtitle: 'Профессиональный ландшафтный дизайн для создания красивых и функциональных пространств',
        heroButton: 'Наши услуги',
        
        // Partners
        partnersTitle: 'Наши партнеры',
        
        // Services
        servicesTitle: 'Наши услуги',
        landscapeDesign: 'Ландшафтный дизайн',
        gardenPlanning: 'Планирование сада',
        irrigation: 'Системы орошения',
        maintenance: 'Техническое обслуживание',
        
        // About
        aboutTitle: 'О нас',
        aboutText: 'Наша организация объединяет ведущих специалистов в области ландшафтного дизайна. Мы сочетаем принципы природной среды и современного дизайна, делая каждый проект уникальным.',
        
        // Contact
        contactTitle: 'Свяжитесь с нами',
        contactForm: 'Форма обратной связи',
        name: 'Имя',
        email: 'Электронная почта',
        message: 'Сообщение',
        send: 'Отправить сообщение',
        address: 'Адрес',
        phone: 'Телефон',
        
        // News
        newsTitle: 'Последние новости',
        readMore: 'Подробнее',
        
        // Footer
        footerText: 'Профессиональные услуги ландшафтного дизайна',
        allRightsReserved: 'Все права защищены',
    },
    uz: {
        // Navigation
        home: 'Bosh sahifa',
        about: 'Biz haqimizda',
        services: 'Xizmatlar',
        news: 'Yangiliklar',
        contact: 'Aloqa',
        
        // Hero section
        heroTitle: 'Tabiat va Dizayn Uyg\'unligi',
        heroSubtitle: 'Professional landshaft dizayni bilan hududingizni go\'zal va funksional qiling',
        heroButton: 'Bizning xizmatlar',
        
        // Partners
        partnersTitle: 'Bizning hamkorlar',
        
        // Services
        servicesTitle: 'Bizning xizmatlar',
        landscapeDesign: 'Landshaft dizayni',
        gardenPlanning: 'Bog\' rejalashtirish',
        irrigation: 'Sug\'orish tizimlari',
        maintenance: 'Texnik xizmat',
        
        // About
        aboutTitle: 'Biz haqimizda',
        aboutText: 'Bizning tashkilot landshaft dizayni sohasida yetakchi mutaxassislar jamoasiga ega. Biz tabiiy muhit va zamonaviy dizayn tamoyillarini uyg\'unlashtirib, har bir loyihani noyob qilamiz.',
        
        // Contact
        contactTitle: 'Biz bilan bog\'laning',
        contactForm: 'Bog\'lanish formasi',
        name: 'Ism',
        email: 'Elektron pochta',
        message: 'Xabar',
        send: 'Xabar yuborish',
        address: 'Manzil',
        phone: 'Telefon',
        
        // News
        newsTitle: 'So\'nggi yangiliklar',
        readMore: 'Batafsil',
        
        // Footer
        footerText: 'Professional landshaft dizayni xizmatlari',
        allRightsReserved: 'Barcha huquqlar himoyalangan',
    }
};

// Language management
class LanguageManager {
    constructor() {
        this.currentLanguage = 'en';
        this.init();
    }

    init() {
        // Get saved language from localStorage or default to English
        this.currentLanguage = localStorage.getItem('language') || 'en';
        this.updateLanguage();
        this.bindEvents();
    }

    bindEvents() {
        // Desktop language buttons
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const lang = e.target.getAttribute('data-lang');
                this.setLanguage(lang);
            });
        });

        // Mobile language buttons
        document.querySelectorAll('.mobile-lang-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const lang = e.target.getAttribute('data-lang');
                this.setLanguage(lang);
            });
        });
    }

    setLanguage(lang) {
        if (translations[lang]) {
            this.currentLanguage = lang;
            localStorage.setItem('language', lang);
            this.updateLanguage();
            this.updateActiveButtons();
        }
    }

    updateLanguage() {
        const elements = document.querySelectorAll('[data-translate]');
        elements.forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[this.currentLanguage][key]) {
                if (element.tagName === 'INPUT' && element.type === 'submit') {
                    element.value = translations[this.currentLanguage][key];
                } else if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                    element.placeholder = translations[this.currentLanguage][key];
                } else {
                    element.textContent = translations[this.currentLanguage][key];
                }
            }
        });

        // Update document language attribute
        document.documentElement.lang = this.currentLanguage;
        
        // Update page title based on language
        const titles = {
            en: 'LandscapeDesign - Professional Landscape Architecture',
            ru: 'LandscapeDesign - Профессиональная ландшафтная архитектура',
            uz: 'LandscapeDesign - Professional landshaft arxitekturasi'
        };
        document.title = titles[this.currentLanguage];
    }

    updateActiveButtons() {
        // Update desktop buttons
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.classList.remove('active');
            if (btn.getAttribute('data-lang') === this.currentLanguage) {
                btn.classList.add('active');
            }
        });

        // Update mobile buttons
        document.querySelectorAll('.mobile-lang-btn').forEach(btn => {
            btn.classList.remove('active');
            if (btn.getAttribute('data-lang') === this.currentLanguage) {
                btn.classList.add('active');
            }
        });
    }

    getCurrentLanguage() {
        return this.currentLanguage;
    }

    translate(key) {
        return translations[this.currentLanguage][key] || key;
    }
}

// Initialize language manager when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.languageManager = new LanguageManager();
});