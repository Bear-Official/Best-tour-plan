<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best tour plan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="scss/dist/style.css">
    <link rel="stylesheet" href="/scss/dist/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/73a455c001.js" crossorigin="anonymous"></script>

</head>

<body>

   
    <section class="hotel">
        <div class="container">
            <div class="hotel-info">
                <div class="hotel-info__text">
                    <div class="hotel-wrapper">
                        <div class="stars hotel-stars__two">
                            <img src="/images/Star.svg" alt="stars">
                            <img src="/images/Star.svg" alt="stars">
                            <img src="/images/Star.svg" alt="stars">
                            <img src="/images/Star.svg" alt="stars">
                        </div>
                        <h1 class="hotel-name">GRAND HILTON HOTEL</h1>
                        <span class="offer hotel-info__offer">Flash Offer</span>
                        <p class="hotel-description">
                            Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free
                        </p>
                    </div>
                </div>
                <div class=" rating hotel-info__rating">
                    <span class="rating__text">User Rattings 4.5/5</span>
                </div>
            </div>
            <div class="hotel-grid">
                <!-- Slider main container -->
                <div class="swiper hotel-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="/images/Rectangle 5.jpg" alt="slide" class="slide__img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/Rectangle 5.jpg" alt="slide" class="slide__img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/Rectangle 5.jpg" alt="slide" class="slide__img">
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <button class="slider-button slider-button-prev"></button>
                    <button class="slider-button slider-button-next"></button>

                </div>

                <div class="booking booking__element">
                    <div class="booking__info">
                        <div class="booking__price">
                            <span class="booking__start">price starts as</span>
                            <strong class="booking__tag">$8,500</strong>
                            <span class="booking__per">per room / night</span>
                        </div>

                        <div class="booking__room">
                            <div class="booking__text">
                                <img src="/images/user.svg" alt="user" class="booking__icon">
                                <span class="booking__description">2 x Guests</span>
                            </div>
                            <div class="booking__room">
                                <div class="booking__text">
                                    <img src="/images/home.svg" alt="user" class="booking__icon">
                                    <span class="booking__description"> 1 x Room</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="booking__call-center">
                        <span class="call__center-text">Quick Booking</span>
                        <a class="call__center-numb" href="tel:+37368211911">
                            <img src="/images/phone-call.svg" alt="phone-call" class="phone">
                            <span class="booking__tel">12100</span>
                        </a>
                    </div>
                    <button class="hootel__booking-button">View Other Options</button>
                    <div class="hotel__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.548439274068!2d-122.4178355461128!3d37.77718501903494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sTwitter%20HQ!5e0!3m2!1sit!2s!4v1651152824150!5m2!1sit!2s"
                            width="350" height="213" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
    </section> 
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>