<!DOCTYPE html>
<html lang="en" style="background: #020305">
<head>
    <meta charset="UTF-8">
    <title>Svitlo</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi"/>
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

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php'); ?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/loader.php'); ?>

<div class="animation" style="opacity: 0;">

    <div class="animation__scroll">
        <div class="animation__scroll-handler-wrapper">
            <div class="animation__scroll-handler"></div>
        </div>
    </div>

    <div class="animation__screen intro">
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
                    <div class="intro__name-mask"></div>
                    <div class="intro__name-title">
                        <div class="intro__name-title-letter">S</div>
                        <div class="intro__name-title-item">vitlo</div>
                    </div>
                    <div class="intro__name-text">
                        <div class="intro__name-text-item">When business requires results,</div>
                        <div class="intro__name-text-item">it comes to us</div>
                    </div>
                </div>
                <div class="intro__video">
                    <div class="intro__video-item-wrapper">
                        <video class="intro__video-item" autoplay muted loop playsinline></video>
                    </div>
                </div>
            </div>

            <div class="intro__about-block">
                <div class="intro__about-magnet">
                    <div class="magnet">
                        <canvas class="magnet__canvas"></canvas>
                    </div>
                </div>

                <div class="intro__about-button-block" data-modal-open="modal-showreel">
                    <div class="intro__about-button-text">
                        <div class="intro__about-button-text-item">View</div>
                        <div class="intro__about-button-text-item">showreel</div>
                    </div>
                    <div class="intro__about-button-item">

                        <svg class="intro__about-button-icon" viewBox="0 0 20 20">
                            <polygon class="intro__about-button-icon-polygon" points="0,0 20,10 0,20"
                                     style="stroke:black;stroke-width:1"/>
                        </svg>

                        <div class="intro__about-button-item-form"></div>
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
                        <div class="intro__about-desc-item intro__about-desc-item--1">
                            <div class="intro__about-desc-item-line animation__text-wrapper">
                                <div class="animation__text">
                                    ordinary websites
                                </div>
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
                    <div class="intro__about-link char-hover" data-modal-open="modal-showreel">
                        <div class="intro__about-link-text animation__text-wrapper">
                            <div class="animation__text char-hover__item">
                                View
                            </div>
                        </div>
                        <div class="animation__text-wrapper">
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

    <div class="animation__screen businesses animation__screen--change-background">
        <div class="businesses__block layout">
            <div class="animation__block animation__block--ready-title">

                <div class="animation__text-x-scroll animation__text-x-scroll--business businesses__title-wrapper">
                    <div class="businesses__title animation__text-x-scroll-item">We help businesses</div>
                </div>

                <div class="businesses__desc">
                    <div class="businesses__desc-item businesses__desc-item--1">
                        <div class="businesses__desc-item-line animation__text-wrapper">
                            <div class="animation__text">
                                achieve their goals in digital.
                            </div>
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

                <div class="animation__opacity">
                    <div class="businesses__icon-block">
                        <div class="businesses__icon">
                            <svg class="businesses__icon-item businesses__icon-item--1"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="49"/>
                            </svg>
                            <svg class="businesses__icon-item businesses__icon-item--2"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="49"/>
                            </svg>
                        </div>
                        <div class="businesses__icon-title animation__title-wrapper">
                            <div class="animation__title">
                                We combine
                            </div>
                        </div>
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
                    <div class="businesses__subtitle-item businesses__subtitle-item--3">
                        <div class="businesses__subtitle-item-line animation__title-wrapper">
                            <div class="animation__title">
                                to achieve our client's business
                            </div>
                        </div>
                        <div class="businesses__subtitle-item-line animation__title-wrapper">
                            <div class="animation__title">
                                goals. It gives more sales, leads,
                            </div>
                        </div>
                        <div class="businesses__subtitle-item-line animation__title-wrapper">
                            <div class="animation__title">
                                and recognition.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen lets-discuss">
        <div class="lets-discuss__block layout">
            <div class="animation__block">
                <div class="lets-discuss__desc">
                    <div class="lets-discuss__desc-item lets-discuss__desc-item--1">

                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                A website is primarily a
                            </div>
                        </div>
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                marketing tool and an
                            </div>
                        </div>
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                investment in a
                            </div>
                        </div>
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                business, and every
                            </div>
                        </div>
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                investment should pay
                            </div>
                        </div>
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                off and multiply.
                            </div>
                        </div>
                    </div>
                    <div class="lets-discuss__desc-item lets-discuss__desc-item--2">
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                That's what
                            </div>
                        </div>
                        <div class="lets-discuss__desc-item-line animation__title-wrapper">
                            <div class="animation__title">
                                we care about.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lets-discuss__link-block">

                    <div class="lets-discuss__link-block-line animation__title-wrapper">
                        <div class="animation__title"></div>
                    </div>

                    <div class="lets-discuss__link-block-title">
                        <div class="lets-discuss__link-block-title-item">
                            <div class="lets-discuss__link-block-title-item-line animation__title-wrapper">
                                <div class="animation__title">
                                    Our websites are
                                </div>
                            </div>
                        </div>
                        <div class="lets-discuss__link-block-title-item lets-discuss__link-block-title-item--bold">
                            <div class="lets-discuss__link-block-title-item-line animation__title-wrapper">
                                <div class="animation__title">
                                    <div class="lets-discuss__text-carousel">
                                        <div class="lets-discuss__text-carousel-wrapper">
                                            <div class="lets-discuss__text-carousel-item">talked about</div>
                                            <div class="lets-discuss__text-carousel-item">remembered</div>
                                            <div class="lets-discuss__text-carousel-item">proud of</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="lets-discuss__link-block-title-item-line animation__title-wrapper">
                                <div class="animation__title">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lets-discuss__link-item" data-modal-open="modal-form">
                        <div class="char-hover">
                            <div class="animation__title-wrapper">
                                <div class="animation__title char-hover__item">
                                    Let's discuss.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen process animation__screen--change-background" id="process">
        <div class="process__block layout">
            <div class="animation__block">
                <div class="process__icon animation__opacity">
                    <div class="logo-circle">
                        <div class="logo-circle__item">
                            <img class="logo-circle__text" src="./assets/images/circle-text.svg">
                            <img class="logo-circle__logo" src="./assets/images/logo.svg">
                        </div>
                    </div>
                </div>
                <div class="process__title-block">
                    <div class="animation__text-x-scroll animation__text-x-scroll--process process__title-wrapper">
                        <div class="process__title animation__text-x-scroll-item">
                            <div class="process__title-line">Our&nbsp;</div>
                            <div class="process__title-line">process&nbsp;</div>
                        </div>
                    </div>
                    <div class="process__subtitle animation__title-wrapper">
                        <div class="animation__title">
                            The path to achieving the result
                        </div>
                    </div>
                </div>

                <div class="process__items">
                    <div class="process__item">

                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    01
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Interview
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        We discuss your business and the goals that you want to achieve. The main point
                                        is to take a
                                        look at your business from the side, find growth points and determine the goal.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process__item">
                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    02
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Strategy
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Strategy is the key to success. We develop the plan to achieve the desired
                                        result, which we identified during the interview. Success will depend on the
                                        right strategy.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process__item">
                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    03
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        UX
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        We analyze the target audience, competitors, CJM, marketing, sales, and
                                        implement marketing features. Each section of the site should do its own tasks
                                        to perform the aim.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process__item">
                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    04
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        UI
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Packaging plays an important role in business. We will work out the emotional
                                        components and create the right impression about your company.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process__item">
                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    05
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Development
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        The technical part of the implementation of your project. We will make sure that
                                        everything works as it should, and you receive all leads and payments.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process__item">
                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    06
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Marketing
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Once the site is ready, it's time to make it work. Our team is ready to promote
                                        your business through SEO, Google, YouTube, Facebook, Instagram, TikTok ads, and
                                        other channels.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process__item">
                        <div class="process__item-number">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    07
                                </div>
                            </div>
                        </div>
                        <div class="process__item-desc">
                            <div class="process__item-desc-title">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        Improvement
                                    </div>
                                </div>
                            </div>
                            <div class="process__item-desc-text">
                                <div class="animation__text-wrapper">
                                    <div class="animation__text">
                                        We are interested in providing you with the best results. After receiving the
                                        first data, we analyze it and move on to planning larger changes and
                                        implementations to improve outcome.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen portfolio animation__screen--change-background" id="portfolio">
        <div class="animation__block portfolio__title-block layout">
            <div class="portfolio__title">
                <div class="portfolio__title-text">
                    <div class="animation__title-wrapper">
                        <div class="animation__title portfolio__title-text-line">Portfolio</div>
                    </div>
                </div>

            </div>
            <div class="portfolio__subtitle">
                <div class="animation__text-wrapper">
                    <div class="animation__text">
                        Our works already serve our clients' businesses.
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio__slider">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/parts/slider.php';
            echo createSlider('none');
            ?>
        </div>

        <div class="animation__block animation__block--ready-title">
            <div class="portfolio__desc layout">
                <div class="portfolio__desc-item portfolio__desc-item--1">

                    <div class="animation__text-wrapper portfolio__desc-item-inner">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            Businesses come
                        </div>
                    </div>

                    <div class="animation__text-wrapper portfolio__desc-item-inner">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            to us for a website,
                        </div>
                    </div>

                    <div class="animation__text-wrapper portfolio__desc-item-inner">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            but get a lot
                        </div>
                    </div>

                    <div class="animation__text-wrapper portfolio__desc-item-inner">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            more,&nbsp;
                        </div>
                        <div class="animation__text portfolio__desc-item-inner-line portfolio__desc-item-inner-line--main-color">
                            solutions
                        </div>
                    </div>

                    <div class="animation__text-wrapper portfolio__desc-item-inner">
                        <div class="animation__text portfolio__desc-item-inner-line portfolio__desc-item-inner-line--main-color">
                            to their business
                        </div>
                    </div>

                    <div class="animation__text-wrapper portfolio__desc-item-inner">
                        <div class="animation__text portfolio__desc-item-inner-line portfolio__desc-item-inner-line--main-color">
                            problems.
                        </div>
                    </div>

                </div>
                <div class="portfolio__desc-item portfolio__desc-item--2">
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            If you need a “tool" that
                        </div>
                    </div>
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            will sell, generate leads,
                        </div>
                    </div>
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            or increase the brand
                        </div>
                    </div>
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            recognition of your
                        </div>
                    </div>
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            business, then we will be
                        </div>
                    </div>
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            glad to see you among
                        </div>
                    </div>
                    <div class="animation__text-wrapper portfolio__desc-item-inner portfolio__desc-item-inner--2">
                        <div class="animation__text portfolio__desc-item-inner-line">
                            our clients.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio__chart">
            <div class="portfolio__chart-mask"></div>
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

        <div class="portfolio__link-block animation__block layout">
            <div class="portfolio__link-title">

                <div class="animation__title-wrapper">
                    <div class="animation__title">
                        You have the task,
                    </div>
                </div>
                <div class="animation__title-wrapper">
                    <div class="animation__title">
                        we will provide the
                    </div>
                </div>
                <div class="animation__title-wrapper">
                    <div class="animation__title">
                        solution
                    </div>
                </div>
            </div>
            <div class="portfolio__link-item" data-modal-open="modal-form">
                <div class="animation__title-wrapper">
                    <div class="animation__title char-hover">
                        <div class="char-hover__item">
                            Let's discuss.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen our-services" id="services">
        <div class="our-services__block layout animation__block">
            <div class="our-services__title">
                <div class="our-services__title-item">
                    <div class="animation__title-wrapper">
                        <div class="animation__title">
                            Our services
                        </div>
                    </div>
                </div>
            </div>

            <div class="our-services__items">
                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                01
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Landing page
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    We present your product or service using a one-page website
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    so that the visitor desire to buy it.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                02
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Corporate website
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    We present your company from the best side so that customers want
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    to contact you for your products or services, investors want to invest,
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    and potential candidates wish to work for you.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                03
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Online store
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    People love to buy online, and we love to create clear online
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    stores to increase % of conversion.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                04
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    WOW site
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    If you need to stand out among competitors and cause a WOW effect.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                05
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Digital strategy
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    We will develop a digital strategy that will lead your business to the desired
                                    result.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                06
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    UX/UI design
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    If you only need a design, we are ready to help. We can design a website, app, or
                                    platform.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-services__item">
                    <div class="our-services__item-number">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                07
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-desc">
                        <div class="our-services__item-desc-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Marketing
                                </div>
                            </div>
                        </div>
                        <div class="our-services__item-desc-text">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    We will identify the right channel and promote your business through SEO, Google,
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    YouTube, Facebook, Instagram, TikTok ads, and other channels.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-services__item-link" data-modal-open="modal-form">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Let's discuss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="animation__screen we-are" id="about-as">
        <div class="we-are__block layout animation__block">
            <div class="we-are__subtitle">
                <div class="we-are__subtitle-item">
                    <img class="we-are__subtitle-item-ornament" src="./assets/images/ornament.png">
                    <div class="we-are__subtitle-item-text">
                        <div class="animation__text-wrapper we-are__subtitle-item-text-line">
                            <div class="animation__text">
                                a boutique web production
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__subtitle-item-text-line">
                            <div class="animation__text">
                                created by Ukrainians during
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__subtitle-item-text-line">
                            <div class="animation__text">
                                the war.
                            </div>
                        </div>
                    </div>
                </div>
                <img class="we-are__subtitle-flag" src="./assets/images/flag.png">
            </div>

            <div class="we-are__title">
                <div class="animation__title-wrapper we-are__title-item">
                    <div class="animation__title">
                        We are Svitlo&nbsp;
                    </div>
                </div>
            </div>

            <div class="we-are__desc">
                <div class="we-are__desc-item we-are__desc-item--1">
                    <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                        <div class="animation__text">
                            We lost our jobs,
                        </div>
                    </div>
                    <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                        <div class="animation__text">
                            businesses, and
                        </div>
                    </div>
                    <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                        <div class="animation__text">
                            homes
                        </div>
                    </div>
                </div>
                <div class="we-are__desc-item we-are__desc-item--2">
                    <div class="we-are__desc-item-text we-are__desc-item-text--1">
                        <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                            <div class="animation__text">
                                but we didn't
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                            <div class="animation__text">
                                give up and
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                            <div class="animation__text">
                                started
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                            <div class="animation__text">
                                creating new
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__desc-item-text-line-inner">
                            <div class="animation__text">
                                projects
                            </div>
                        </div>
                    </div>
                    <div class="we-are__desc-item-text we-are__desc-item-text--2">
                        <div class="we-are__desc-item-text-line">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Even this website we were making in shelters, during the sound of gunshots and
                                    airstrikes, now we are far from hot spots and safe.
                                </div>
                            </div>
                        </div>
                        <div class="we-are__desc-item-text-line we-are__desc-item-text-line--bold">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    So you can be sure that we will get the job done even under critical circumstances.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="we-are__owners">
                <div class="we-are__owners-title-block">
                    <div class="we-are__owners-title-text">
                        <div class="animation__text-wrapper we-are__owners-title-text-line">
                            <div class="animation__text">
                                We are
                            </div>
                        </div>
                        <div class="animation__text-wrapper we-are__owners-title-text-line">
                            <div class="animation__text">
                                a boutique,
                            </div>
                        </div>
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
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                which means
                            </div>
                        </div>
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                that you will
                            </div>
                        </div>
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                communicate
                            </div>
                        </div>
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                directly with the
                            </div>
                        </div>
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                Founders.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="we-are__owners-items">
                    <div class="we-are__owners-items-desc">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                Also, we take<br>
                                a limited number<br>
                                of projects<br>
                                to work with<br>
                                in order to dip ourselves<br>
                                in your business<br>
                                as if it were<br>
                                our own.
                            </div>
                        </div>

                    </div>

                    <div class="we-are__owners-item we-are__owners-item--1">
                        <img class="we-are__owners-item-photo" src="./assets/images/orlov.jpg">
                        <div class="we-are__owners-item-name">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Oleksii Orlov
                                </div>
                            </div>
                        </div>
                        <div class="we-are__owners-item-position">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Founder, Marketer
                                </div>
                            </div>
                        </div>
                        <div class="we-are__owners-item-desc">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Responsible for the
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    strategic and marketing
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    part of work
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="we-are__owners-item we-are__owners-item--2">
                        <img class="we-are__owners-item-photo" src="./assets/images/lubimov.jpg">
                        <div class="we-are__owners-item-name">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Nikita Lubimov
                                </div>
                            </div>
                        </div>
                        <div class="we-are__owners-item-position">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Founder, Art Director
                                </div>
                            </div>
                        </div>
                        <div class="we-are__owners-item-desc">
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    Responsible for
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    the visual part of
                                </div>
                            </div>
                            <div class="animation__text-wrapper">
                                <div class="animation__text">
                                    each project
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="we-are__link-block">
                    <div class="we-are__link-circle">
                        <div class="logo-circle">
                            <div class="logo-circle__item">
                                <img class="logo-circle__text" src="./assets/images/circle-text-white.svg">
                                <img class="logo-circle__logo" src="./assets/images/logo-white.svg">
                            </div>
                        </div>
                    </div>
                    <div class="we-are__link-title">
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                Furthermore,
                            </div>
                        </div>
                        <div class="animation__text-wrapper">
                            <div class="animation__text">
                                we are interested in giving the maximum result to each of our clients.
                            </div>
                        </div>
                    </div>
                    <div class="we-are__link-desc">
                        <div class="we-are__link-desc-text">
                            <div class="animation__text-wrapper we-are__link-desc-text-line">
                                <div class="animation__text">
                                    Let's set up a call
                                </div>
                            </div>
                            <div class="animation__text-wrapper we-are__link-desc-text-line">
                                <div class="animation__text">
                                    to find out how we
                                </div>
                            </div>
                            <div class="animation__text-wrapper we-are__link-desc-text-line">
                                <div class="animation__text">
                                    can help you
                                </div>
                            </div>
                        </div>
                        <div class="we-are__link-desc-item" data-modal-open="modal-form">
                            <div class="animation__text-wrapper">
                                <div class="animation__text char-hover">
                                    <div class="char-hover__item">
                                        Let's discuss.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen clients" id="clients">
        <div class="clients__text-row">
            <div class="clients__text-row-line clients__text-row-line--1">
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
            <div class="clients__text-row-line clients__text-row-line--2">
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

    <div class="animation__screen have-a-task animation__screen--change-background">
        <div class="have-a-task__block layout">

            <div class="animation__block animation__block--ready-title">
                <div class="animation__text-x-scroll animation__text-x-scroll--have-a-task have-a-task__title-wrapper">
                    <div class="have-a-task__title animation__text-x-scroll-item">Have a&nbsp;task?</div>
                </div>
                <div class="have-a-task__subtitle">
                    <div class="animation__text-wrapper">
                        <div class="animation__text">
                            We are ready to provide you with a solution
                        </div>
                    </div>
                </div>

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
                            <div class="placeholder placeholder--textarea"
                                 data-elem="textarea"
                                 data-rule="input-empty">
                                <textarea class="input input--textarea placeholder__input"
                                          placeholder="How can we help you"></textarea>
                                <div class="placeholder__item">How can we help you</div>
                            </div>
                        </div>
                    </div>

                    <div class="have-a-task__form-button form-check__button">
                        <div class="animation__text-wrapper">
                            <div class="animation__text char-hover">
                                <div class="char-hover__item">
                                    Discuss the project.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('./parts/footer.php'); ?>

</div>

<?php require('./parts/modal-form.php'); ?>
<?php require('./parts/modal-showreel.php'); ?>
<?php require('./parts/modal-thank-you.php'); ?>
<?php require('./parts/menu.php'); ?>

<script src="./dist/<?= $js ?>"></script>


</body>
</html>