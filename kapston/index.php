<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalkMate+</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f4f4f9; }
        .navbar { background: linear-gradient(135deg, #4F46E5, #3B82F6); }
        .navbar-brand { font-weight: bold; color: #fff; font-size: 1.8rem; cursor: default; }
        .navbar-brand span { color: #FBBF24; }
        .nav-link { color: #fff; transition: color 0.3s ease; }
        .nav-link:hover { color: #C7D2FE; }
        .sign-up-btn {
            background-color: #FBBF24;
            color: #1F2937;
            border-radius: 50px;
            padding: 0.3rem 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .sign-up-btn:hover {
            background-color: #F59E0B;
            transform: scale(1.05);
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .navbar-toggler-icon { filter: invert(100%); }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span>TalkMate+</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger Icon -->
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features"><i class="fas fa-star"></i> Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs"><i class="fas fa-question-circle"></i> FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   

<script>
    $(document).ready(function() {
        $('.navbar-toggler').click(function() {
            $(this).toggleClass('collapsed');
            $('#navbarNav').toggleClass('show');

            // Toggle Hamburger and X Icon
            if ($(this).hasClass('collapsed')) {
                $(this).find('.navbar-toggler-icon').show();
                $(this).find('.close-icon').hide();
            } else {
                $(this).find('.navbar-toggler-icon').hide();
                $(this).find('.close-icon').show();
            }
        });
    });
</script>



<section class="home-section d-flex align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, #4F46E5, #3B82F6); position: relative; overflow: hidden;">
    <!-- Overlay SVG -->
    <div class="overlay-svg position-absolute w-100 h-100" style="z-index: 1; opacity: 0.15; top: 0; left: 0;">
        <img src="images/Wave.svg" alt="Overlay" class="w-100 h-100" style="object-fit: cover;">
    </div>

    <!-- Background Elements -->
    <div style="position: absolute; top: 10%; left: 20%; width: 50px; height: 50px; background-color: rgba(255, 191, 36, 0.3); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: 15%; right: 25%; width: 70px; height: 70px; background-color: rgba(75, 70, 229, 0.3); border-radius: 50%;"></div>
    <div style="position: absolute; top: 30%; right: 10%; width: 100px; height: 100px; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
    
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h1 style="font-weight: 700; font-size: 2.5rem; color: #fff;">
                    Welcome to <span style="color: #FBBF24;">TalkMate+</span>
                </h1>
                <p style="font-size: 1.1rem; margin-top: 1rem; color: #E0E7FF;">
                    is an open-source app for children and adults with speech and language impairments, aiding communication with symbols and text-to-speech.
                </p>
                <a href="#" class="btn" style="background-color: #FBBF24; color: #1F2937; border-radius: 50px; padding: 0.6rem 1.8rem; font-weight: bold; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;" 
                   onmouseover="this.style.backgroundColor='#F59E0B'; this.style.color='#fff';" 
                   onmouseout="this.style.backgroundColor='#FBBF24'; this.style.color='#1F2937';">
                    Get Started
                </a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img src="images/home.svg" alt="TalkMate+ Illustration" class="img-fluid" style="max-width: 90%; animation: float 3s ease-in-out infinite;">
            </div>
        </div>
    </div>
</section>


<section  id="features" class="features-section position-relative" style="padding: 6rem 0; overflow: hidden; background: linear-gradient(135deg, #3730A3, #1E40AF);">
    <!-- Overlay SVG -->
    <div class="overlay-svg position-absolute w-100 h-100" style="z-index: 1; opacity: 0.15; top: 0; left: 0;">
        <img src="images/map.svg" alt="Overlay" class="w-100 h-100" style="object-fit: cover;">
    </div>

    <div class="container position-relative" style="z-index: 2;">
        <!-- Section Title -->
        <h2 class="text-center fw-bold text-light display-4 mb-5" data-aos="fade-down" style="letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.2);">
            <span style="color: #FBBF24;">F</span>eatures
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="1000">
                <div class="feature-card text-light text-center">
                    <div class="icon-wrapper">
                        <i class="fas fa-smile-beam"></i>
                    </div>
                    <h3 class="feature-title">Emotion-Based Buttons</h3>
                    <p class="feature-text">
                        Express emotions easily with intuitive and interactive buttons designed for seamless communication.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="1200">
                <div class="feature-card text-light text-center">
                    <div class="icon-wrapper">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <h3 class="feature-title">Text-to-Speech</h3>
                    <p class="feature-text">
                        Convert text into natural-sounding speech to enhance accessibility and communication.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="1400">
                <div class="feature-card text-light text-center">
                    <div class="icon-wrapper">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3 class="feature-title">Personalized Card Game</h3>
                    <p class="feature-text">
                        Engage in a fun, educational card game tailored to your preferences and learning style.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section" id="about">
    <div class="overlay"></div>
    <div class="about-content">
        <div class="about-image">
            <img src="images/about.svg" alt="TalkMate+ Illustration">
        </div>
        <div class="about-text">
            <h3>About <span>TalkMate+</span></h3>
            <p>
                TalkMate+ is designed to help non-verbal individuals and children communicate effectively using emotion-based buttons, text-to-speech technology, and personalized card games. Our mission is to make communication accessible, intuitive, and fun for everyone.
            </p>
        </div>
    </div>
</section>

<style>
    html {
  scroll-behavior: smooth;
}

/* About Section */
.about-section {
    position: relative;
    padding: 6rem 2rem;
    background: linear-gradient(135deg, #3730A3, #1E40AF);
    color: #E0E7FF;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-section .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('images/1.svg') no-repeat center;
    background-size: cover;
    pointer-events: none;
    z-index: 0;
    opacity: 0.3;
}

.about-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 3rem;
    max-width: 1200px;
    width: 100%;
    z-index: 1;
}

.about-image img {
    max-width: 100%;
    border-radius: 2rem;
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s;
}

.about-image img:hover {
    transform: translateY(-5px);
}

.about-text {
    flex: 1;
    text-align: left;
}

.about-text h3 {
    font-size: 3rem;
    color: #FBBF24;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
}

.about-text h3 span {
    color: #fff;
}

.about-text p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #E0E7FF;
    opacity: 0.9;
    max-width: 600px;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .about-content {
        flex-direction: column;
        text-align: center;
    }

    .about-text {
        text-align: center;
    }
}
</style>

<section class="testimonials">
    <div class="overlay"></div>
    <div class="container">
        <div class="title">
            <h1><span>Testimonials</span></h1>
        </div>

        <div class="slider-indicator">
            <img src="images/tt.jpg" class="active" alt="img" data-id="0">
            <img src="images/tt.jpg" alt="img" data-id="1">
            <img src="images/tt.jpg" alt="img" data-id="2">
        </div>

        <div class="slider">
            <div class="slide active">
                <p>
                   "TalkMate+ has changed the way I communicate! The voice clarity and user-friendly interface make it so easy to stay connected with my loved ones. I can't imagine my day without it now!"
                </p>
                <div class="client-info">
                    <h3>Raven</h3>
                    <span>Founder at Zach</span>
                </div>
            </div>
            <div class="slide">
                <p>
                   "Amazing app for seamless conversations! I use TalkMate+ daily for both personal and professional calls. The features are innovative, and the call quality is unmatched. Highly recommended!"
                </p>
                <div class="client-info">
                    <h3>Jiro</h3>
                    <span>Founder at Welling</span>
                </div>
            </div>
            <div class="slide">
                <p>
                    "Staying connected has never been this easy! TalkMate+ offers an intuitive platform with excellent call and messaging features. It's reliable and fun to use. Absolutely love it!"
                </p>
                <div class="client-info">
                    <h3>Jack</h3>
                    <span>Founder at Zim</span>
                </div>
            </div>
        </div>
    </div>
</section>


    <script>
     const slides = document.querySelector(".slider").children;
const indicatorImages = document.querySelector(".slider-indicator").children;

for(let i = 0; i < indicatorImages.length; i++) {
    indicatorImages[i].addEventListener("click", function() {
        for(let j = 0; j < indicatorImages.length; j++) {
            indicatorImages[j].classList.remove("active");
        }
        this.classList.add("active");
        const id = this.getAttribute("data-id");
        for(let j = 0; j < slides.length; j++) {
            slides[j].classList.remove("active");
        }
        slides[id].classList.add("active");
    });
}

    </script>




<style>

 .testimonials {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, #3730A3, #1E40AF);
    color: #fff;
    padding: 100px 15px;
    overflow: hidden;
}

.testimonials .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('images/ttt.svg') center/cover no-repeat;
    opacity: 0.2;
    z-index: 0;
}

.container {
    max-width: 1200px;
    margin: auto;
    position: relative;
    z-index: 1;
}

.title h1 {
    text-align: center;
    font-size: 48px;
    margin-bottom: 60px;
    color: #fff;
}

.title h1 span {
    color: #FBBF24;
    font-weight: bold;
    transition: color 0.3s;
}

.slider-indicator {
    text-align: center;
    margin-bottom: 30px;
}

.slider-indicator img {
    max-height: 80px;
    max-width: 80px;
    border-radius: 50%;
    margin: 0 8px;
    opacity: 0.5;
    cursor: pointer;
    transition: transform 0.3s, opacity 0.3s;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.slider-indicator img.active,
.slider-indicator img:hover {
    opacity: 1;
    transform: scale(1.1);
}

.slider {
    max-width: 800px;
    margin: auto;
    text-align: center;
    padding: 40px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.slider p {
    font-size: 20px;
    line-height: 1.5;
    color: #e0e0e0;
}

.client-info h3 {
    margin-top: 20px;
    font-weight: bold;
    color: #FBBF24;
}

.client-info span {
    color: #ccc;
}

.slide {
    display: none;
}

.slide.active {
    display: block;
    animation: fadeIn 1s ease;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Features Section */
.features-section {
    position: relative;
    padding: 6rem 0;
    background: linear-gradient(135deg, #4F46E5, #3B82F6);
}

/* Feature Cards */
.feature-card {
    background: rgba(255, 255, 255, 0.08); /* Slight Transparency */
    border-radius: 1.5rem;
    padding: 2rem;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    text-align: center;
    min-height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.feature-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(255, 255, 255, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.12);
}

/* Icons */
.icon-wrapper {
    font-size: 3rem;
    color: #FBBF24;
    margin-bottom: 1rem;
    transition: color 0.3s;
}

.feature-card:hover .icon-wrapper {
    color: #fff;
    transform: scale(1.2);
}

/* Feature Title */
.feature-title {
    font-size: 1.8rem;
    font-weight: bold;
    color: #FBBF24;
    margin-bottom: 1rem;
    transition: color 0.3s;
}

.feature-card:hover .feature-title {
    color: #fff;
}

/* Feature Text */
.feature-text {
    font-size: 1.1rem;
    color: #E0E7FF;
    line-height: 1.6;
}

/* Section Title */
h2 span {
    font-weight: 900;
    transition: all 0.3s ease-in-out;
}

h2 span:hover {
    color: white;
    text-shadow: 0 0 20px #FBBF24;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .feature-card {
        margin-bottom: 2rem;
    }
}
</style>

<section class="faqs-section" id="faqs">
    <h2><span>Frequently Asked</span> Questions</h2>
    <div class="faq-container">
        <div class="faq-item">
            <button class="faq-question">
                What is TalkMate+?
                <span class="icon">+</span>
            </button>
            <div class="faq-answer">
                <p>TalkMate+ is a communication tool designed for non-verbal individuals and children, featuring emotion-based buttons, text-to-speech, and card games.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How does it work?
                <span class="icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Users can select emotion-based buttons to express themselves, use text-to-speech to communicate, and play personalized card games for engagement.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                Is TalkMate+ mobile-friendly?
                <span class="icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Yes, TalkMate+ is fully responsive and optimized for mobile devices, ensuring a seamless experience across all screen sizes.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* FAQs Section */
.faqs-section {
    position: relative;
    padding: 6rem 2rem;
    background: linear-gradient(135deg, #3730A3, #1E40AF);
    color: #E0E7FF;
    text-align: center;
    overflow: hidden;
}

.faqs-section h2 {
    font-size: 3rem;
    color: #FBBF24;
    margin-bottom: 3rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    display: inline-block;
    z-index: 1;
    font-weight: bold;
}

.faqs-section h2 span {
    color: #fff;
    display: block;
    font-weight: bold;
    font-size: 2.4rem;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
    position: relative;
    z-index: 1;
}

.faq-item {
    background: rgba(255, 255, 255, 0.08);
    border-radius: 1rem;
    margin-bottom: 1.5rem;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.faq-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.faq-question {
    width: 100%;
    padding: 1.5rem;
    background: transparent;
    border: none;
    outline: none;
    text-align: left;
    color: #FBBF24;
    font-size: 1.4rem;
    font-weight: 300;
    cursor: pointer;
    transition: background 0.3s;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-question:hover {
    background: rgba(255, 255, 255, 0.05);
}

.icon {
    transition: transform 0.3s;
    font-size: 1.5rem;
}

.faq-answer {
    padding: 0 1.5rem 1.5rem;
    display: none;
    color: #E0E7FF;
    font-size: 1.1rem;
    line-height: 1.6;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    animation: fadeIn 0.3s ease;
}

.faq-item.active .faq-answer {
    display: block;
}

.faq-item.active .icon {
    transform: rotate(45deg);
}

/* Overlay SVG (You can add your own SVG here) */
.faqs-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('images/2.svg') no-repeat center center;
    background-size: cover;
    opacity: 0.2;
    z-index: 0;
    pointer-events: none;
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive Styles */
@media (max-width: 768px) {
    .faq-question {
        font-size: 1.2rem;
    }
}
</style>

<script>
    // FAQ Toggle Script
    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentNode;
            parent.classList.toggle('active');
        });
    });
</script>


<section class="contact-section" id="contact">
    <div class="contact-container">
        <h2><span>Get in Touch</span> Contact Us</h2>
        <div class="contact-form">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" name="name" required>
                    <label>Name</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-group">
                    <textarea name="message" required></textarea>
                    <label>Message</label>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>



<style>
/* Contact Section */
.contact-section {
    padding: 4rem 2rem;
    background: linear-gradient(135deg, #312E81, #1E3A8A); 
    color: #E0E7FF;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.contact-container {
    max-width: 600px;
    margin: 0 auto;
    background: rgba(30, 58, 138, 0.85);
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
    position: relative;
    z-index: 1;
}

.contact-container h2 {
    font-size: 2.5rem;
    color: #FBBF24;
    margin-bottom: 2rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
}

.contact-container h2 span {
    display: block;
    font-size: 1.8rem;
    color: #fff;
    font-weight: bold;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.input-group {
    position: relative;
}

.input-group input,
.input-group textarea {
    width: 100%;
    padding: 1rem;
    background: transparent;
    border: 1px solid #FBBF24;
    border-radius: 0.5rem;
    color: #fff;
    outline: none;
    resize: none;
    transition: all 0.3s;
}

.input-group label {
    position: absolute;
    top: 50%;
    left: 1rem;
    color: #A5B4FC;
    pointer-events: none;
    transform: translateY(-50%);
    transition: all 0.3s;
}

.input-group input:focus ~ label,
.input-group textarea:focus ~ label {
    top: -10px;
    left: 1rem;
    font-size: 0.85rem;
    color: #FBBF24;
}

.submit-btn {
    background: #FBBF24;
    color: #1E3A8A;
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: background 0.3s;
    text-transform: uppercase;
    font-weight: bold;
}

.submit-btn:hover {
    background: #F59E0B;
}

/* Overlay SVG */
.contact-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('images/1.svg') no-repeat center center;
    background-size: cover;
    opacity: 0.2;
    z-index: 0;
    pointer-events: none;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .contact-container {
        padding: 1.5rem;
    }
}


</style>

<footer class="footer-section">
    <div class="footer-content">
        <p>&copy; 2025 TalkMate+. All Rights Reserved.</p>
        <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</footer>

<style>
/* Footer Section */
.footer-section {
    background: linear-gradient(135deg, #312E81, #1E3A8A); 
    color: #E0E7FF;
    padding: 2rem 1rem;
    text-align: center;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-content p {
    margin: 0;
    font-size: 1rem;
    color: #CBD5E1;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 1rem 0 0;
    display: flex;
    justify-content: center;
    gap: 1.5rem;
}

.footer-links li {
    display: inline;
}

.footer-links a {
    color: #E0E7FF;
    text-decoration: none;
    transition: color 0.3s;
    font-weight: 500;
}

.footer-links a:hover {
    color: #D1D5DB;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .footer-links {
        flex-direction: column;
        gap: 0.5rem;
    }
}
</style>





    <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
