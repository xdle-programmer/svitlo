<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Svitlo</title>

    <?php
    $files = scandir('dist');

    foreach ($files as $file) {
        if (strstr($file, 'js') && !strstr($file, 'map')) {
            $js = $file;
        }

        if (strstr($file, 'css') && !strstr($file, 'map')) {
            $css = $file;
        }
    }

    ?>

    <link rel="stylesheet" type="text/css" href="./dist/<?= $css ?>">
</head>
<body>

<div class="animation">
    <div class="animation__slide">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="intro">
                    <div class="intro__block layout">
                        <div class="intro__video-block">
                            <div class="intro__desc">
                                <div class="intro__desc-title">
                                    <div class="intro__desc-title-item">We create websites</div>
                                    <div class="intro__desc-title-item">in combination</div>
                                    <div class="intro__desc-title-item">with marketing, strategy</div>
                                </div>
                                <div class="intro__desc-text">& outstanding design.</div>
                            </div>
                            <div class="intro__name">
                                <div class="intro__name-title">
                                    <div class="intro__name-title-letter">S</div>
                                    <div class="intro__name-title-item">vitle</div>
                                </div>
                                <div class="intro__name-text">
                                    <div class="intro__name-text-item">When business requires results,</div>
                                    <div class="intro__name-text-item">it comes to us</div>
                                </div>
                            </div>
                            <div class="intro__video">
                                <div class="intro__video-item-wrapper">
                                    <img class="intro__video-item" src="./assets/video/intro-video-temp.jpg">
                                </div>
                            </div>
                        </div>

                        <div class="intro__about-block">
                            <div class="intro__about-button-block">
                                <div class="intro__about-button-text">
                                    <div class="intro__about-button-text-item">View</div>
                                    <div class="intro__about-button-text-item">showreel</div>
                                </div>
                                <div class="intro__about-button-item">
                                    <img class="intro__about-button-icon" src="assets/icons/play-black.svg">
                                    <img class="intro__about-button-icon-anchor" src="assets/icons/play-black.svg">
                                </div>
                            </div>

                            <div class="animation__block">
                                <div class="intro__about-title">
                                    <div class="intro__about-title-line intro__about-title-line--1 animation__title-wrapper">
                                        <div class="animation__title">
                                            We don't
                                        </div>
                                    </div>
                                    <div class="intro__about-title-line intro__about-title-line--2 animation__title-wrapper">
                                        <div class="animation__title">
                                            create
                                        </div>
                                    </div>
                                </div>
                                <div class="intro__about-desc">
                                    <div class="intro__about-desc-item intro__about-desc-item--1 animation__text-wrapper">
                                        <div class="animation__text">
                                            ordinary websites
                                        </div>
                                    </div>
                                    <div class="intro__about-desc-item intro__about-desc-item--2">
                                        <div class="intro__about-desc-item-line animation__text-wrapper">
                                            <div class="animation__text">
                                                we create
                                            </div>
                                        </div>
                                        <div class="intro__about-desc-item-line animation__text-wrapper">
                                            <div class="animation__text">
                                                marketing
                                            </div>
                                        </div>
                                        <div class="intro__about-desc-item-line animation__text-wrapper">
                                            <div class="animation__text">
                                                and sales
                                            </div>
                                        </div>
                                        <div class="intro__about-desc-item-line animation__text-wrapper">
                                            <div class="animation__text">
                                                tools.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro__about-link">
                                    <div class="intro__about-link-text animation__text-wrapper">
                                        <div class="animation__text">
                                            View
                                        </div>
                                    </div>
                                    <div class=" animation__text-wrapper">
                                        <div class="animation__text">
                                            <img class="intro__about-link-icon" src="assets/icons/play-main.svg">
                                        </div>
                                    </div>

                                    <div class="intro__about-link-text animation__text-wrapper">
                                        <div class="animation__text">
                                            showreel
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide animation__change-background">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="businesses">
                    <div class="businesses__block layout">
                        <div class="animation__block">

                            <div class="animation__text-x-scroll animation__text-x-scroll--business">
                            <div class="businesses__title animation__title-wrapper">
                                <div class="animation__title">
                                    We help businesses
                                </div>
                            </div>
                            </div>


                            <div class="businesses__desc">
                                <div class="businesses__desc-item businesses__desc-item--1 animation__text-wrapper">
                                    <div class="animation__text">
                                        achieve their goals in digital.
                                    </div>
                                </div>
                                <div class="businesses__desc-item businesses__desc-item--2">
                                    <div class="businesses__desc-item-line animation__text-wrapper">
                                        <div class="animation__text">
                                            We developed our
                                        </div>
                                    </div>
                                    <div class="businesses__desc-item-line animation__text-wrapper">
                                        <div class="animation__text">
                                            own methodology,
                                        </div>
                                    </div>
                                    <div class="businesses__desc-item-line animation__text-wrapper">
                                        <div class="animation__text">
                                            which successfully
                                        </div>
                                    </div>
                                    <div class="businesses__desc-item-line animation__text-wrapper">
                                        <div class="animation__text">
                                            shows itself
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="animation__block">
                            <div class="businesses__icon-block">
                                <div class="businesses__icon">
                                    <div class="businesses__icon-item businesses__icon-item--1"></div>
                                    <div class="businesses__icon-item businesses__icon-item--2"></div>
                                </div>
                                <div class="businesses__icon-title">
                                    We combine
                                </div>
                            </div>

                            <div class="businesses__subtitle">
                                <div class="businesses__subtitle-item businesses__subtitle-item--1 animation__title-wrapper">
                                    <div class="animation__title">
                                        Marketing
                                    </div>
                                </div>
                                <div class="businesses__subtitle-item businesses__subtitle-item--2 animation__title-wrapper">
                                    <div class="animation__title">
                                        with Design
                                    </div>
                                </div>
                                <div class="businesses__subtitle-item businesses__subtitle-item--3">to achieve our
                                    client's
                                    business
                                    goals.
                                    It gives more sales, leads, and recognition.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="lets-discuss">
                    <div class="lets-discuss__block layout">
                        <div class="lets-discuss__desc">
                            <div class="lets-discuss__desc-item lets-discuss__desc-item--1">A website is primarily a
                                marketing
                                tool
                                and
                                an investment in a business, and every investment should pay off and multiply.
                            </div>
                            <div class="lets-discuss__desc-item lets-discuss__desc-item--2">
                                <div class="lets-discuss__desc-item-line">That's what</div>
                                <div class="lets-discuss__desc-item-line">we care about.</div>
                            </div>
                        </div>

                        <div class="lets-discuss__link-block">
                            <div class="lets-discuss__link-block-title">
                                <div class="lets-discuss__link-block-title-item">Our websites are</div>
                                <div class="lets-discuss__link-block-title-item lets-discuss__link-block-title-item--bold">
                                    talked
                                    about
                                </div>
                            </div>

                            <div class="lets-discuss__link-item">Let's discuss.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide animation__change-background2">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="process">
                    <div class="process__block layout">
                        <div class="process__icon">
                            <div class="logo-circle">
                                <div class="logo-circle__item">
                                    <img class="logo-circle__text" src="./assets/images/circle-text.svg">
                                    <img class="logo-circle__logo" src="./assets/images/logo.svg">
                                </div>
                            </div>
                        </div>
                        <div class="process__title-block">
                            <div class="process__title"
                                 data-animation-element
                                 data-animation-type="slide-right"
                                 data-animation-duration="40"
                                 data-animation-offset-top="80"
                                 data-animation-overlay="0"
                            >Our process
                            </div>
                            <div class="process__subtitle">The path to achieving the result</div>
                        </div>

                        <div class="process__items">
                            <div class="process__item">
                                <div class="process__item-number">01</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">Interview</div>
                                    <div class="process__item-desc-text">We discuss your business and the goals that you
                                        want to
                                        achieve. The main point is to take a look at your business from the side, find
                                        growth
                                        points
                                        and
                                        determine the goal
                                    </div>
                                </div>
                            </div>
                            <div class="process__item">
                                <div class="process__item-number">02</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">Strategy</div>
                                    <div class="process__item-desc-text">Strategy is the key to success. We develop the
                                        plan to
                                        achieve
                                        the desired result, which we identified during the interview. Success will
                                        depend on the
                                        right
                                        strategy.
                                    </div>
                                </div>
                            </div>
                            <div class="process__item">
                                <div class="process__item-number">03</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">UX</div>
                                    <div class="process__item-desc-text">We analyze the target audience, competitors,
                                        CJM,
                                        marketing,
                                        sales, and implement marketing features. Each section of the site should do its
                                        own
                                        tasks to
                                        perform the aim.
                                    </div>
                                </div>
                            </div>
                            <div class="process__item">
                                <div class="process__item-number">04</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">UI</div>
                                    <div class="process__item-desc-text">Packaging plays an important role in business.
                                        We will
                                        work
                                        out
                                        the emotional components and create the right impression about your company.
                                    </div>
                                </div>
                            </div>
                            <div class="process__item">
                                <div class="process__item-number">05</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">Development</div>
                                    <div class="process__item-desc-text">The technical part of the implementation of
                                        your
                                        project.
                                        We
                                        will make sure that everything works as it should, and you receive all leads and
                                        payments.
                                    </div>
                                </div>
                            </div>
                            <div class="process__item">
                                <div class="process__item-number">06</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">Marketing</div>
                                    <div class="process__item-desc-text">Once the site is ready, it's time to make it
                                        work. Our
                                        team
                                        is
                                        ready to promote your business through SEO, Google, YouTube, Facebook,
                                        Instagram, TikTok
                                        ads,
                                        and other channels.
                                    </div>
                                </div>
                            </div>
                            <div class="process__item">
                                <div class="process__item-number">07</div>
                                <div class="process__item-desc">
                                    <div class="process__item-desc-title">Improvement</div>
                                    <div class="process__item-desc-text">We are interested in providing you with the
                                        best
                                        results.
                                        After
                                        receiving the first data, we analyze it and move on to planning larger changes
                                        and
                                        implementations to improve outcome.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="portfolio">
                    <div class="portfolio__title-block layout">
                        <div class="portfolio__title">
                            <div class="portfolio__title-text">Portfolio</div>
                            <img class="portfolio__title-icon" src="./assets/icons/rotate.svg">
                        </div>
                        <div class="portfolio__subtitle">Our works already serve our clients' businesses.</div>
                    </div>

                    <div class="portfolio__slider">

                        <div class="swiper">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>

                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                                <div class="swiper-slide">
                                    <img class="portfolio__slider-img" src="./assets/images/portfolio-item.png">
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="portfolio__desc layout">
                        <div class="portfolio__desc-item portfolio__desc-item--1">
                            <div class="portfolio__desc-item-inner">Businesses come to us for a website, but get a
                                lot<br>more,
                            </div>
                            <div class="portfolio__desc-item-inner portfolio__desc-item-inner--main-color">solutions<br>to
                                their
                                business
                                problems.
                            </div>
                        </div>
                        <div class="portfolio__desc-item portfolio__desc-item--2">
                            If you need a “tool" that will sell, generate leads, or increase the brand recognition of
                            your
                            business,
                            then we will be glad to see you among our clients.
                        </div>
                    </div>

                    <div class="portfolio__chart">
                        <div class="portfolio__chart-line portfolio__chart-line--1"></div>
                        <div class="portfolio__chart-dot portfolio__chart-dot--1"></div>
                        <div class="portfolio__chart-line portfolio__chart-line--2"></div>
                        <div class="portfolio__chart-dot portfolio__chart-dot--2"></div>
                        <div class="portfolio__chart-line portfolio__chart-line--3"></div>
                        <div class="portfolio__chart-dot portfolio__chart-dot--3"></div>
                        <div class="portfolio__chart-line portfolio__chart-line--4"></div>
                        <div class="portfolio__chart-dot portfolio__chart-dot--4"></div>
                        <div class="portfolio__chart-line portfolio__chart-line--5"></div>
                        <div class="portfolio__chart-dot portfolio__chart-dot--5"></div>
                        <div class="portfolio__chart-line portfolio__chart-line--6"></div>
                        <div class="portfolio__chart-dot portfolio__chart-dot--6"></div>
                        <div class="portfolio__chart-line portfolio__chart-line--7"></div>
                    </div>

                    <div class="portfolio__link-block layout">
                        <div class="portfolio__link-title">You have the task, we will provide the solution</div>
                        <div class="portfolio__link-item">Let's discuss.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="our-services">
                    <div class="our-services__block layout">
                        <div class="our-services__title">
                            <div class="our-services__title-item">Our services</div>
                        </div>

                        <div class="our-services__items">
                            <div class="our-services__item">
                                <div class="our-services__item-number">01</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">Landing page</div>
                                    <div class="our-services__item-desc-text">
                                        We present your product or service using a one-page website<br>
                                        so that the visitor desire to buy it
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>

                            <div class="our-services__item">
                                <div class="our-services__item-number">02</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">Corporate website</div>
                                    <div class="our-services__item-desc-text">
                                        We present your company from the best side so that customers want<br>
                                        to contact you for your products or services, investors want to invest,<br>
                                        and potential candidates wish to work for you
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>

                            <div class="our-services__item">
                                <div class="our-services__item-number">03</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">Online store</div>
                                    <div class="our-services__item-desc-text">
                                        People love to buy online, and we love to create clear online<br>
                                        stores to increase % of conversion
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>

                            <div class="our-services__item">
                                <div class="our-services__item-number">04</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">WOW site</div>
                                    <div class="our-services__item-desc-text">
                                        If you need to stand out among competitors and cause a wow effect.
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>

                            <div class="our-services__item">
                                <div class="our-services__item-number">05</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">Digital strategy</div>
                                    <div class="our-services__item-desc-text">
                                        We will develop a digital strategy that will lead your business to the desired
                                        result.
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>

                            <div class="our-services__item">
                                <div class="our-services__item-number">06</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">UX/UI design</div>
                                    <div class="our-services__item-desc-text">
                                        If you only need a design, we are ready to help. We can design a website, app,
                                        or
                                        platform.
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>

                            <div class="our-services__item">
                                <div class="our-services__item-number">07</div>
                                <div class="our-services__item-desc">
                                    <div class="our-services__item-desc-title">Marketing</div>
                                    <div class="our-services__item-desc-text">
                                        We will identify the right channel and promote your business through SEO,
                                        Google,<br>
                                        YouTube, Facebook, Instagram, TikTok ads, and other channels.
                                    </div>
                                </div>
                                <div class="our-services__item-link">Let's discuss</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="we-are">
                    <div class="we-are__block layout">
                        <div class="we-are__subtitle">
                            <div class="we-are__subtitle-item">
                                <img class="we-are__subtitle-item-ornament" src="./assets/images/ornament.png">
                                <div class="we-are__subtitle-item-text">a boutique web production created by Ukrainians
                                    during
                                    the
                                    war.
                                </div>
                            </div>
                            <img class="we-are__subtitle-flag" src="./assets/images/flag.png">
                        </div>

                        <div class="we-are__title">We are Svitlo</div>

                        <div class="we-are__desc">
                            <div class="we-are__desc-item we-are__desc-item--1">
                                We lost our jobs, businesses, and homes
                            </div>
                            <div class="we-are__desc-item we-are__desc-item--2">
                                <div class="we-are__desc-item-text we-are__desc-item-text--1">
                                    but we didn't give up and started creating new projects
                                </div>
                                <div class="we-are__desc-item-text we-are__desc-item-text--2">
                                    <div class="we-are__desc-item-text-line">
                                        Even this website we were making in shelters, during the sound of gunshots and
                                        airstrikes,
                                        now
                                        we are far from hot spots and safe.
                                    </div>
                                    <div class="we-are__desc-item-text-line we-are__desc-item-text-line--bold">
                                        So you can be sure that we will get the job done even under critical
                                        circumstances.
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="we-are__owners">
                            <div class="we-are__owners-title-block">
                                <div class="we-are__owners-title-text">
                                    We are<br>
                                    a boutique,
                                </div>
                                <div class="we-are__owners-title-circle">
                                    <div class="logo-circle">
                                        <div class="logo-circle__item">
                                            <img class="logo-circle__text" src="./assets/images/circle-text-white.svg">
                                            <img class="logo-circle__logo" src="./assets/images/logo-white.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="we-are__owners-title-subtext">
                                    which means that you will communicate directly with the Founders.
                                </div>
                            </div>

                            <div class="we-are__owners-items">
                                <div class="we-are__owners-items-desc">
                                    Also, we take<br>
                                    a limited number<br>
                                    of projects<br>
                                    to work with<br>
                                    in order to dip ourselves<br>
                                    in your business<br>
                                    as if it were<br>
                                    our own.
                                </div>

                                <div class="we-are__owners-item we-are__owners-item--1">
                                    <img class="we-are__owners-item-photo" src="./assets/images/orlov.jpg">
                                    <div class="we-are__owners-item-name">Oleksii Orlov</div>
                                    <div class="we-are__owners-item-position">Founder, Marketer</div>
                                    <div class="we-are__owners-item-desc">
                                        Responsible for the<br>
                                        strategic and marketing<br>
                                        part of work
                                    </div>
                                </div>

                                <div class="we-are__owners-item we-are__owners-item--2">
                                    <img class="we-are__owners-item-photo" src="./assets/images/lubimov.jpg">
                                    <div class="we-are__owners-item-name">Nikita Lubimov</div>
                                    <div class="we-are__owners-item-position">Founder, Art Director</div>
                                    <div class="we-are__owners-item-desc">
                                        Responsible for<br>
                                        the visual part of<br>
                                        each project
                                    </div>
                                </div>
                            </div>

                            <div class="we-are__link-block">
                                <div class="we-are__link-title">
                                    Furthermore,<br>
                                    we are interested in giving the maximum result to each of our clients.
                                </div>
                                <div class="we-are__link-desc">
                                    <div class="we-are__link-desc-text">
                                        Let's set up a call<br>
                                        to find out how we<br>
                                        can help you
                                    </div>
                                    <div class="we-are__link-desc-item">Let's discuss.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="clients">
                    <div class="clients__text-row">
                        <div class="clients__text-row-line">
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                            <div class="clients__text-row-item">Svitlo.Production</div>
                        </div>
                    </div>
                    <div class="clients__block layout">
                        <div class="clients__title">Our clients</div>
                        <div class="clients__item clients__item--main clients__item--1">
                            <img class="clients__item-img clients__item-img--gs" src="./assets/images/client-gs.png">
                        </div>

                        <div class="clients__item clients__item--2">
                            <img class="clients__item-img clients__item-img--creo"
                                 src="./assets/images/client-creo.png">
                        </div>

                        <div class="clients__item clients__item--main clients__item--3">
                            <img class="clients__item-img clients__item-img--0-100"
                                 src="./assets/images/client-0-100.png">
                        </div>

                        <div class="clients__item clients__item--4">
                            <img class="clients__item-img clients__item-img--traffic"
                                 src="./assets/images/client-traffic.png">
                        </div>

                        <div class="clients__item clients__item--5">
                            <img class="clients__item-img clients__item-img--chart"
                                 src="./assets/images/client-chart.png">
                        </div>

                        <div class="clients__item clients__item--6">
                            <img class="clients__item-img clients__item-img--vooodoo"
                                 src="./assets/images/client-vooodoo.png">
                        </div>

                        <div class="clients__item clients__item--main clients__item--7">
                            <img class="clients__item-img clients__item-img--other"
                                 src="./assets/images/client-other.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
        </div>
    </div>

    <div class="animation__slide animation__change-background2">
        <div class="animation__slide-items">
            <div class="animation__slide-item">
                <div class="have-a-task">
                    <div class="have-a-task__block layout">
                        <div class="have-a-task__title">Have a task?</div>
                        <div class="have-a-task__subtitle">We are ready to provide you with a solution</div>

                        <div class="have-a-task__form form-check">
                            <div class="have-a-task__form-items">
                                <div class="have-a-task__form-item">
                                    <div class="have-a-task__form-item-field">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input class="input placeholder__input" placeholder="Name">
                                            <div class="placeholder__item">Name</div>
                                        </div>
                                    </div>

                                    <div class="have-a-task__form-item-field">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input class="input placeholder__input" placeholder="Phone">
                                            <div class="placeholder__item">Phone</div>
                                        </div>
                                    </div>

                                    <div class="have-a-task__form-item-field">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input class="input placeholder__input" placeholder="E-mail">
                                            <div class="placeholder__item">E-mail</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="have-a-task__form-item">
                                    <div class="placeholder placeholder--textarea form-check__field"
                                         data-elem="textarea"
                                         data-rule="input-empty">
                        <textarea class="input input--textarea placeholder__input"
                                  placeholder="How can we help you"></textarea>
                                        <div class="placeholder__item">How can we help you</div>
                                    </div>
                                </div>
                            </div>

                            <div class="have-a-task__form-button form-check__button">Discuss the project.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animation__slide-item">
                <footer class="footer">
                    <div class="footer__text-row">
                        <div class="footer__text-row-line">
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                            <div class="footer__text-row-item">Svitlo.Production</div>
                        </div>
                    </div>

                    <div class="footer__block layout">
                        <div class="footer__top">
                            <img class="footer__logo" src="./assets/images/logo-white.svg">
                            <div class="footer__desc">
                                We will make<br>
                                your digital<br>
                                side of business<br>
                                attractive to<br>
                                your clients.
                            </div>

                            <div class="footer__contacts">
                                <a href="tel:+380730667577" class="footer__contacts-phone">380 73 066 75 77</a>
                                <a href="mailto:hello@svitlo-production.com"
                                   class="footer__contacts-mail">hello@svitlo-production.com</a>
                                <div class="footer__contacts-copyright">© Svitlo.Production 2022</div>
                            </div>
                        </div>
                        <div class="footer__bottom">
                            <div class="footer__link">Let's discuss.</div>
                            <div class="footer__social">
                                <a href="#" class="footer__social-item">
                                    <img class="footer__social-item-img" src="./assets/icons/whatsapp.svg">
                                </a>
                                <a href="#" class="footer__social-item">
                                    <img class="footer__social-item-img" src="./assets/icons/instagram.svg">
                                </a>
                                <a href="#" class="footer__social-item">
                                    <img class="footer__social-item-img" src="./assets/icons/linkedin.svg">
                                </a>
                                <a href="#" class="footer__social-item">
                                    <img class="footer__social-item-img" src="./assets/icons/behance.svg">
                                </a>
                                <a href="#" class="footer__social-item">
                                    <img class="footer__social-item-img" src="./assets/icons/dribbble.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="animation__slide-background-items">
            <div class="animation__slide-background-item"></div>
            <div class="animation__slide-background-item"></div>
        </div>
    </div>
</div>

<script src="./dist/<?= $js ?>"></script>
</body>
</html>