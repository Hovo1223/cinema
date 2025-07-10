<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <header>
        <div class=" headerContainer" style="width:100%">
            <div class="imageParent">
                <a href="/"><img class="LogoClass" src="/images/logo (1).png" alt="Logo"></a>
            </div>
            <nav class="ulLiParent d-flex justify-content-end w-100">
                <div class="our">
                    <ul>
                        <li>Մեր մասին</li>
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

        <div class="backgroundImageParent" style="position:relative">
            <div class="imgPArent" style="height:808px; position:relative">
                <img src="{{ asset($view->image) }}" style="object-fit: cover;-o-object-position: center;object-position: center; height:808px; width:100%">
            </div>
            <div class="container main">
                <div class="single-content__img overflow-hidden position-relative me-xl-37 me-lg-25 me-md-20 me-15"
                    style='top: 515px;
        left: 100px;
        border-radius: 2.2rem;
        -webkit-box-shadow: 0 0 3rem #191919ba;
        box-shadow: 0 0 3rem #191919ba;
        height: 569px;
        width: 405px;
        position: absolute !important;
        '>
                    <img src="{{ asset($view->post_image) }}" alt="" style="width:100%; height:100%">
                </div>

                <div class="info d-flex "
                    style="bottom: -274px;
                        left: 560px;
                        position: absolute;
                        color: white;
                        flex-direction:column">
                    <h1>{{$view->title}}</h1>
                    <div class="buttonsParentCredit">
                        <button class="btn btn-danger me-lg-23 me-0 mb-lg-0 mb-8 elTicketView" style="
                            background: transparent linear-gradient(160deg, #850000 10%, #006f77) 0 0 no-repeat padding-box;
                            border: none;
                            -webkit-transition: all .3s cubic-bezier(0,0,0,1);
                            transition: all .3s cubic-bezier(0,0,0,1);
                        ">Գնել էլ․ տոմս
                        </button>

                        <button class="btn btn-outline-danger d-flex justify-content-center align-items-center trailerButtonView">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play buttonSvg" viewBox="0 0 16 16">
                                <path
                                    d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z" />
                            </svg>
                            Թրեյլեր
                        </button>
                    </div>
                    <ul style="padding:0">
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px; ">Ռեժիսոր</p>
                            <p class="lighten-txt" style="font-size:18px; font-family: Arian AMU Bold">{{$view->director}}</p>
                        </li>
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px;">Դերերում</p>
                            <p class="lighten-txt" style="font-size:18px; font-family: Arian AMU Bold ">{{$view->cast}}</p>
                        </li>
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px;">Ժանր</p>
                            <p class="lighten-txt" style="font-size:18px; font-family: Arian AMU Bold">
                                @foreach($view->genres as $genre)
                                {{ $genre->genre }},
                                @endforeach
                            </p>
                        </li>
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px;">Ցուցադրման լեզու</p>
                            @foreach ($countries as $country)
                            @if ($country->id == $view->language_id)
                            {{ $country->name }}
                            @endif
                            @endforeach
                        </li>
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px;">Տևողություն</p>
                            <p class="lighten-txt" style="font-size:18px; font-family: Arian AMU Bold">{{$view->duration}}</p>
                        </li>
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px;">Տարիքային սահմանափակում</p>
                            <p class="lighten-txt" style="font-size:18px; font-family: Arian AMU Bold">{{$view->age}}</p>
                        </li>
                        <li class='d-flex '>
                            <p class='f_bold light-txt' style="font-weight:500;     font-family: Arian AMU Bold, sans-serif; font-size:18px; width: 340px;">Նկարագրություն</p>
                            <p class="lighten-txt" style="font-size:18px; font-family: Arian AMU Bold">{{$view->description}}</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </header>

    <?php
    $daysOfWeek = ['Կրկ․', 'Երկ․', 'Երք․', 'Չորք․', 'Հնգ․', 'Ուրբ․', 'Շբթ․'];
    $currentDate = new DateTime();
    ?>

    <div class="moveList">
        <div class="container moveListContainer" style="max-width:1820px !important">
            <div class="todayTomorrow">
                <?php
                for ($i = 0; $i < 7; $i++):
                    $date = clone $currentDate;
                    $date->modify("+$i day");
                    $formattedDateDisplay = $date->format('d.m');
                    $formattedDate = $date->format('Y-m-d');

                    if ($i == 0) {
                        $dayName = 'Այսօր';
                    } elseif ($i == 1) {
                        $dayName = 'Վաղը';
                    } else {
                        $dayName = $daysOfWeek[($i + $currentDate->format('w')) % 7];
                    }
                ?>
                    <div class="listParent" data-date="<?= $formattedDate ?>">
                        @php
                        $specialPriceFound = false;
                        @endphp

                        @foreach($slides as $slide)
                        @if($slide->start_time )
                        @php
                        $startDate = (new DateTime($slide->start_time))->format('Y-m-d');
                        $endDate = (new DateTime($slide->end_time))->format('Y-m-d');
                        @endphp

                        @if($formattedDate >= $startDate && $formattedDate <= $endDate && $slide->special_price == 1)
                            @php
                            $specialPriceFound = true;
                            @endphp
                            @endif
                            @endif
                            @endforeach


                            <div class="importPrice">
                                <?php if ($specialPriceFound): ?>
                                    <p style='font-size:12px; color:white; margin:0'>Հատուկ գին</p>
                                    <div class="special-pricePicture">
                                        <img src="/images/special-price.svg" alt="">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="date">
                                <span class="f_bold"><?= $dayName; ?></span>
                                <span><?= $formattedDateDisplay; ?></span>
                            </div>
                            <div class="Schedule-date--border"></div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <table class="table table-striped table-dark" style="width: 100%; text-align: center; margin:0">
        <thead>
            <tr style="height:70px">
                <th scope="col">Ժամ</th>
                <th scope="col ">Անվանում</th>
                <th scope="col ">Դահլիճ</th>
                <th scope="col ">Ցուցադրման լեզու</th>
                <th scope="col ">Տարիք</th>
                <th scope="col ">Արժեք</th>
                <th scope="col "></th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide)
            <tr data-date="<?= (new DateTime($slide->start_time))->format('Y-m-d'); ?>">
                <?php
                $time = (new DateTime($slide->start_time))->format('H:i');
                ?>
                <td style="justify-content: center">{{ $time }}</td>
                <td>{{ \Illuminate\Support\Str::limit($slide->title, 16, '...') }}</td>
                <td>

                    @php
                    $hallColor = null;
                    foreach ($hall as $halls) {
                    if ($halls->id == $slide->halls_id) {
                    $hallColor = $halls->color;
                    break;
                    }
                    }
                    @endphp
                    <span style="background-color: {{$halls->color}}; 
                    height: 15px;
                        padding: 5px;
                        border-radius: 5px;
                        transform: matrix(.71, .71, -.71, .71, 0, 0);
                        width: 16px;" class='hallsColor'></span>
                    {{$halls->hall_name}}
                </td>

                <td>
                    @foreach ($countries as $country)
                    @if ($country->id == $slide->language_id)
                    {{ $country->name }}
                    @endif
                    @endforeach
                </td>
                <td> {{ $slide->age }}+</td>
                <td>{{$slide->price}} դ</td>
                <td><button class='borderElTicket'>Գնել էլ․ տոմս</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="movesActivParent">
        <div class="container movesNameContainer" style='margin:0 !important'>
            <h2 class='movesName' style="padding-left:95px">Ընթացիկ ֆիլմեր</h2>
        </div>
    </div>
    <div class="slide-container swiper">
        <div class="slide-content" style="margin: 0px 100px;">
            <div class="card-wrapper swiper-wrapper">

                @foreach($slides_now as $slide_now)
                <div class="card swiper-slide movesSwiper">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <img src="{{ asset($slide_now->post_image) }}" class="movePhotosSlides" style="border-radius:25px" alt="">
                        <div class="hover-text">
                            <h3>{{ $slide_now->title }}</h3>
                            <p style="padding-top:10px; font-size:14px; text-align:start; margin:0">
                                {{$slide_now->age}}+
                                <span style="display:inline-block; width:1px; height:20px; background:white; vertical-align:middle;"></span>
                                @foreach($slide_now->genres as $genre)
                                {{ $genre->genre }},
                                @endforeach
                            </p>
                            <button class="button">գնել էլ․ տոմս</button>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn nextSwipeFirst"></div>
        <div class="swiper-button-prev swiper-navBtn prevSwipeFirst"></div>
    </div>

    <footer style="background:#191919">
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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $('.listParent').on('click', function() {
        let selectedDate = $(this).data('date');
        let matchedRows = [];
        let otherRows = [];

        $('tbody tr').each(function() {
            let movieDate = $(this).data('date');
            if (movieDate >= selectedDate) {
                matchedRows.push(this);
            } else {
                otherRows.push(this);
            }
        });

        $('tbody').empty().append(matchedRows).append(otherRows);
        $('.listParent').removeClass('active');

        $(this).addClass('active');

    });

    $('.stickImage').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });
</script>

<style>
    .swiper-button-next,
    .swiper-rtl .swiper-button-prev {
        right: var(--swiper-navigation-sides-offset, 35px) !important;
    }

    .dashboard-footer-line {
        margin: -1px !important;
    }

    .swiper {
        padding-bottom: 66px;
    }

    dl,
    ol,
    ul {
        margin-bottom: 0 !important
    }

    .moveList {

        padding-top: 600px;
    }

    .btn:not(.custom-btn) {
        border-radius: 3.2rem;
        -webkit-box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .7);
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .7);
        line-height: 1.15;
        width: 188px;
        padding: 19px;
    }

    .buttonSvg {
        color: black
    }

    .buttonsParentCredit {
        display: flex;
        gap: 30px;
        padding-top: 30px;
        padding-bottom: 50px;
    }
    .btn:hover {
        background-color:red !important;

    }
    .trailerButtonView:hover {
        background-color:red ;
        cursor: pointer;
    }
    .elTicketView:hover {
        background:red !important;
        cursor: pointer;
    }
</style>