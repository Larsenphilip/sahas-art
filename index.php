<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover and collect Artworks from the best galleries around the world.">
    <title>Sahas Art Gallery | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
   <nav class="navbar">
        <div class="container nav-content">
            <div class="logo">Sahas Art</div>
            <div class="nav-links">
                <a href="index.php" class="nav-link">Home</a>
                <a href="products.php" class="nav-link">Products</a>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title">Contemporary Paintings Done by <br>Sahas</h1>
                <div class="hero-buttons">
                    <a href="products.php" class="btn-primary">View Products</a>
                    <a href="#contact" class="btn-outline">Enquiry</a>
                </div>
            </div>
        </section>

     <!-- Carousel Section -->
        <section class="carousel-section" id="collection">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Featured Collection</span>
                    <h2>Explore Our Masterpieces</h2>
                </div>
                
                <div class="carousel-container">
                    <button class="carousel-button prev" aria-label="Previous Slide">
                        <svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                    </button>
                    
                    <div class="carousel-track-container">
                        <ul class="carousel-track">
                            <li class="carousel-slide"><img src="img_1.jpeg" alt="Painting 1"></li>
                            <li class="carousel-slide"><img src="img_2.jpeg" alt="Painting 2"></li>
                            <li class="carousel-slide"><img src="img_3.jpeg" alt="Painting 3"></li>
                            <li class="carousel-slide"><img src="img_4.jpeg" alt="Painting 4"></li>
                            <li class="carousel-slide"><img src="img_5.jpeg" alt="Painting 5"></li>
                            <li class="carousel-slide"><img src="img_6.jpeg" alt="Painting 6"></li>
                        </ul>
                    </div>

                    <button class="carousel-button next" aria-label="Next Slide">
                        <svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
                    </button>
                </div>
            </div>

            <!--
            <div class="view-all-container">
                    <a href="#collection" class="cta-button">View All Products</a>
                </div>
            -->
    </section>

        <!--About Us -->
        <section class="about-section" id="about">
            <div class="container">
                <div class="about-content-wrapper">
                    <!-- Text Content -->
                    <div class="about-text">
                        <span class="section-label">About Us</span>
                        <h1 class="about-heading">Curating Visual Stories for the Soul.</h1>
                        <p class="about-description">
                            At Sahas Art, we believe that every brushstroke tells a story. 
                            We are more than just an image listing site; we are a vibrant community dedicated 
                            to connecting passionate artists with art lovers worldwide. Our gallery features 
                            an exquisite collection of modern, contemporary, and classic paintings, curated 
                            to inspire and transform your space.
                        </p>
                        <a href="products.php" class="cta-button">Explore Collection</a>
                    </div>
                    
                    <!-- Image Content -->
                    <div class="about-image-container">
                        <img src="about.png" alt="Modern Art Gallery Interior" class="about-image">
                    </div>
                </div>
            </div>
    </section>

       

        <!-- Reviews Section -->
        <section class="reviews-section">
            <div class="review-container">
                <div class="section-header">
                    <h2>Loved by Collectors Worldwide</h2>
                </div>

                <!-- Review 1 -->
                <div class="review-card active" data-index="0">
                    <div class="review-image-wrapper">
                        <img src="img_1.jpeg" alt="Artwork by Arun Prem" class="review-image">
                    </div>
                    <div class="review-content">
                        <p class="review-quote">"The world has certainly changed! Having the ability to view affordable pieces from such talented artists is incredible. The piece was perfectly described, and exactly as described when it arrived! I'm so pleased and happy to own it. Saatchi Art is a wonderful resource."</p>
                        <h4 class="review-author">Irene</h4>
                        <span class="review-artwork-info">Greenlife 2 Painting By Arun Prem</span>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="review-card" data-index="1">
                    <div class="review-image-wrapper">
                        <img src="img_2.jpeg" alt="Artwork by Sarah J" class="review-image">
                    </div>
                    <div class="review-content">
                        <p class="review-quote">"Absolutely stunning. The colors are even more vibrant in person. The packaging was secure and delivery was faster than expected. A true masterpiece for my living room."</p>
                        <h4 class="review-author">Michael T.</h4>
                        <span class="review-artwork-info">Abstract Dreams By Sarah Jenkins</span>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="review-card" data-index="2">
                    <div class="review-image-wrapper">
                        <img src="img_3.jpeg" alt="Artwork by David R" class="review-image">
                    </div>
                    <div class="review-content">
                        <p class="review-quote">"Sahas Art made the process of buying my first original painting so easy. The collection is curated beautifully, and I feel connected to the artist's story."</p>
                        <h4 class="review-author">Elena R.</h4>
                        <span class="review-artwork-info">Urban Silence By David Ross</span>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="review-nav">
                    <button class="review-arrow prev-review" aria-label="Previous Review">
                        <svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                    </button>
                    <div class="review-dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                    </div>
                    <button class="review-arrow next-review" aria-label="Next Review">
                        <svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
                    </button>
                </div>

                
            </div>
        </section>
    </main>
<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-container">
            <!-- Address Layout -->
            <div class="footer-column">
                <h3>Contact Us</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span>Sahas Veedu<br>Mandaveli, Chennai - 600001</span>
                    </div>
                    <a href="mailto:contact@sahasart.com" class="contact-item">
                        <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <span>naathaansahas@gmail.com</span>
                    </a>
                    <a href="tel:+919876543210" class="contact-item">
                        <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 1.25 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        <span>sahas oda phone number</span>
                    </a>
                </div>
            </div>

            <!-- Social Media Layout -->
            <div class="footer-column">
                <h3>Connect With Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <svg viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02z"/></svg>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="social-link">
                        <svg viewBox="0 0 24 24"><path d="M16.75 13.96c.25.13.36.46.24.71-.13.25-.46.36-.71.24-2.5-1.52-5.65-1.85-8.23-1.02-.26.08-.54-.06-.62-.32-.08-.26.06-.54.32-.62 2.85-.91 6.33-.56 9 1.01zm0-2.61c.25.13.36.46.24.71-.13.25-.46.36-.71.24-2.5-1.52-5.65-1.85-8.23-1.02-.26.08-.54-.06-.62-.32-.08-.26.06-.54.32-.62 2.85-.91 6.33-.56 9 1.01zm0-2.6c.25.13.36.46.24.71-.13.25-.46.36-.71.24-2.5-1.52-5.65-1.85-8.23-1.02-.26.08-.54-.06-.62-.32-.08-.26.06-.54.32-.62 2.85-.91 6.33-.56 9 1.01zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.96 14.2c-.17.29-.53.38-.82.21-2.25-1.37-5.09-1.67-8.47-1.16-.32.05-.62-.18-.67-.5-.05-.32.18-.62.5-.67 3.73-.55 6.95-.2 9.54 1.38.29.17.38.53.21.82v-.08zm.9-2.9c-.21.34-.65.45-.99.24-2.57-1.57-6.49-2.03-9.53-1.11-.38.12-.79-.09-.91-.47-.12-.38.09-.79.47-.91 3.51-1.07 7.89-.54 10.9 1.31.34.21.45.65.24.99l-.18-.05zm.1-3.07c-3.09-1.83-8.19-2-11.16-1.1-.42.12-.87-.12-1-.54-.12-.42.12-.87.54-1 3.39-1.03 9.07-.82 12.63 1.29.38.23.5.72.27 1.1-.23.38-.72.5-1.1.27l-.18-.02z"/></svg> 
                        <span>WhatsApp</span>
                    </a>
                    <a href="#" class="social-link">
                        <svg viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/></svg>
                        <span>Instagram</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2025 Sahas Art. All rights reserved.</p>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(track.children);
            const nextButton = document.querySelector('.carousel-button.next');
            const prevButton = document.querySelector('.carousel-button.prev');
            let autoPlayInterval;
            
            let currentIndex = 0;

            const updateCarousel = () => {
                const slideWidth = slides[0].getBoundingClientRect().width;
                const style = window.getComputedStyle(track);
                const gap = parseFloat(style.gap || 0);
                const amountToMove = (slideWidth + gap) * currentIndex;
                track.style.transform = 'translateX(-' + amountToMove + 'px)';
            }

            const moveToNextSlide = () => {
                const visibleSlides = Math.floor(track.parentElement.offsetWidth / slides[0].offsetWidth);
                const maxIndex = slides.length - visibleSlides;
                
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to start
                }
                updateCarousel();
            };

            const moveToPrevSlide = () => {
                const visibleSlides = Math.floor(track.parentElement.offsetWidth / slides[0].offsetWidth);
                const maxIndex = slides.length - visibleSlides;
                
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex; // Loop to end
                }
                updateCarousel();
            };

            // Auto Play Functionality
            const startAutoPlay = () => {
                autoPlayInterval = setInterval(moveToNextSlide, 2000); // Change slide every 2 seconds
            };

            const stopAutoPlay = () => {
                clearInterval(autoPlayInterval);
            };

            // Event Listeners
            nextButton.addEventListener('click', () => {
                stopAutoPlay();
                moveToNextSlide();
                startAutoPlay();
            });

            prevButton.addEventListener('click', () => {
                stopAutoPlay();
                moveToPrevSlide();
                startAutoPlay();
            });

            // Pause on hover
            const carouselContainer = document.querySelector('.carousel-container');
            carouselContainer.addEventListener('mouseenter', stopAutoPlay);
            carouselContainer.addEventListener('mouseleave', startAutoPlay);

            // Handle window resize
            window.addEventListener('resize', updateCarousel);

            // Start loop
            startAutoPlay();

            // --- Review Slider Logic ---
            const reviewCards = document.querySelectorAll('.review-card');
            const dots = document.querySelectorAll('.dot');
            const prevReviewBtn = document.querySelector('.prev-review');
            const nextReviewBtn = document.querySelector('.next-review');
            let currentReviewIndex = 0;

            const showReview = (index) => {
                // Hide all reviews
                reviewCards.forEach(card => card.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                // Show target review
                reviewCards[index].classList.add('active');
                dots[index].classList.add('active');
                currentReviewIndex = index;
            };

            nextReviewBtn.addEventListener('click', () => {
                let newIndex = currentReviewIndex + 1;
                if (newIndex >= reviewCards.length) newIndex = 0;
                showReview(newIndex);
            });

            prevReviewBtn.addEventListener('click', () => {
                let newIndex = currentReviewIndex - 1;
                if (newIndex < 0) newIndex = reviewCards.length - 1;
                showReview(newIndex);
            });

            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    showReview(index);
                });
            });
        });
    </script>
    

   
</body>
</html>



