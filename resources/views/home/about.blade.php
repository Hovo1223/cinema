<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/home/about.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    .about-swiper .swiper-slide {
        width: 90% !important;
        opacity: 0.5;
        transition: all 0.3s ease;
    }
    .about-swiper .swiper-slide-active {
        width: 90% !important;
        opacity: 1;
    }
    .about-swiper .swiper-slide-next {
        width: 10% !important;
        opacity: 0.7;
    }
    .h-100 {
        height: 63% !important;
    }
    hr {
     margin:  0 !important;
    }

    .px-8 {
        padding-left: .8rem !important;
        padding-right: .8rem !important;
    }
    .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        margin-left: auto;
        margin-right: auto;
        padding-left: var(--bs-gutter-x, 1.8rem);
        padding-right: var(--bs-gutter-x, 1.8rem);
        width: 85%;
    }


    .halls-swiper .swiper-slide {
        width: 100%;
        max-width: 560px;
        height: 490px;
        transition: transform 0.3s ease, opacity 0.3s ease, height 0.3s ease;
        opacity: 0.5;
        transform: scale(0.7);
    }
    .halls-swiper .swiper-wrapper {
        display: flex;
    }

    .halls-swiper .swiper-slide-active {
        transform: scale(1);
        opacity: 1;
        z-index: 3;
        width: 560px !important;
        border-radius: 50px !important;
    }
    .halls-swiper .swiper-slide-next,
    .halls-swiper .swiper-slide-prev {
        transform: scale(0.85);
        opacity: 0.8;
        z-index: 2;
    }


</style>
<body>
<header class="position-absolute w-100 s-0 t-0" style="z-index:1">
    <div class="headerParent">
        <div class="imageParent">
            <a href="/home"><img class="LogoClass" src="/images/logo (1).png" alt="Logo"></a>
        </div>
        <nav class="ulLiParent d-flex justify-content-end w-100">
            <div class="our">
                <ul>
                    <li class="active">
                        <a href="http://127.0.0.1:8000/home/about">Մեր մասին</a>
                    </li>
                    <li>Ընթացիկ</li>
                    <li>Սպասվող</li>
                    <li>Պրոմո</li>
                    <li>Գովազդ</li>
                    <li>Կապ</li>
                </ul>
            </div>
            <div class="internet">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search rotate-right" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2c0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4c0 0 0 0 0 0c19.8 27.1 39.7 54.4 49.2 86.2l160 0zM192 512c44.2 0 80-35.8 80-80l0-16-160 0 0 16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z" />
                        </svg>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<main style="background:#191919">
    <div class="h-100 aboutUs blandMode-bg position-relative">
        <section class='aboutUs-about min-vh-100 position-relative d-flex flex-column justify-content-end mb-79'>
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="col-24 pt-xl-150 pt-lg-120 pt-100">
                        <!-- DEscription  -->
                    </div>
                </div>
            </div>

            <div class="aboutUs-about__slider d-flex align-items-center position-relative mb-md-34 mb-20 w-100">
                <div class="aboutUs-about__slider_cover position-absolute w-100 h-100"></div>

                <div class="swiper-container swiper__aboutUs ps-md-20">
                    <div class="swiper-wrapper moscowSlide ">
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>
                        <div class="swiper-slide moscowImageSlide"><img src="/images/31650399.webp" alt=""></div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="aboutUs-halls position-relative pt-xxl-90 pt-xl-50 pt-lg-40 pt-md-30 pt-17">
            <div class="container-fluid px-md-18 px-8">
                <div class="swiper-container halls-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                        <div class="swiper-slide moscowCinemaImage"><img src="/images/31650399.webp" alt="Hall 1"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="custom-swiper-section" style="padding: 200px 0px 315px 0px">
            <div id="carouselExample" class="carousel slide">
                <div class="container" style="max-width: 840px !important;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/31650399.webp"  class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/31650399.webp"  class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/31650399.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
</main>
<footer style="background:#191919; position: relative">
    <div class="dashboard-footer-line">
        <hr class="line">
    </div>
    <div class="logoWhite">
        <img src="/images/white-logo.png" alt="">
    </div>
    <div class="footer-nav">
        <ul>
            <li>Մեր մասին</li>
            <li>Ընթացիկ</li>
            <li>Սպասվող</li>
            <li>Պրոմո</li>
            <li>Գովազդ</li>
            <li>Կապ</li>
        </ul>
    </div>
    <div class="infoParent">
        <div class="Directory">
            <div class="infoTitleAndUlLi">
                <div class="workDiv">
                    <p style='color:white; font-size:16px'>Մենք աշխատում ենք ամեն օր</p>
                </div>
                <div class="infoFooterParent">
                    <div class="infoFooter">
                        <ul>
                            <li>Տոմսարկղ</li>
                            <li>Տեղեկատու</li>
                            <li>Հեռ.</li>
                        </ul>
                    </div>
                    <div class="infoFooterSecond">
                        <ul>
                            <li>10:00-22:00</li>
                            <li>10:00-22:00</li>
                            <div class="phoneParent">
                                <li>+374 10 52 12 10</li>
                                <li>+374 10 52 12 40</li>
                                <li>+374 11 52 12 40</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="town">
                <span>ՀՀ, ք.Երևան, Աբովյան 18</span>
                <div class="infokinomoscowamParent">
                    <p style='height:20px; margin:0'>info@kinomoscow.am</p>
                </div>
                <div class="iconsFooter">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </div>
            </div>
            <div class="condition">
                <span style='color:white; font-weight:700'>Ընդհանուր դրույթներ եւ պայմաններ</span>
                <div class="infokinomoscowamParent" style='font-weight:700'>
                    <p style='height:20px; margin:0; color:white'>Գաղտնիության քաղաքականություն</p>
                </div>
            </div>
        </div>
    </div>

    <div class="design">
        <p>Designed and developed by TCO Team</p>
    </div>
    <div class="stickyParent">
        <div class="sticky">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up stickImage" viewBox="0 0 16 16">
                <path d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
            </svg>
        </div>
    </div>
</footer>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="http://127.0.0.1:8000/js/home/about/about.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


