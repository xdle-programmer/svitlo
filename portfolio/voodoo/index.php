<!DOCTYPE html>
<html lang="en" style="background: #020305">
<head>
    <meta charset="UTF-8">
    <title>Svitlo</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi"/>
    <?php
    $files = scandir('../../dist');

    foreach ($files as $file) {
        if (strstr($file, 'js') && !strstr($file, 'map')) {
            $js = $file;
        }

        if (strstr($file, 'css') && !strstr($file, 'map')) {
            $css = $file;
        }
    }

    ?>

    <link rel="stylesheet" type="text/css" href="../../dist/<?= $css ?>">
    <style>
        :root {
            --main-case-color: #E0005E;
            --main-case-color-pseudo-opacity: #101010;
            --natural-case-color: #032EF5;

            --main-text-color: #FFFFFF;
            --natural-text-color: #1B1F25;
        }
    </style>

    <script>
        window.loadState = [];
        function setLoadState() {
            loadState.push(true)
        }
    </script>
</head>
<body class="body-case">

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php'); ?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/loader.php'); ?>

<div class="animation" style="opacity: 0;">

    <div class="animation__scroll">
        <div class="animation__scroll-handler-wrapper">
            <div class="animation__scroll-handler"></div>
        </div>
    </div>

    <div class="animation__screen case-intro">
        <div class="case-intro__background">
            <div class="case-intro__filter-text-wrapper">
                <div class="case-intro__filter-text case-intro__filter-text--background">
                    <div class="case-intro__filter-text-item">
                        VOODOO - is the TOP-3 Facebook & Instagram paid advertising school based in Ukraine.
                    </div>
                </div>
                <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                     data-flashlight-size="11.07">
                    <div class="case-intro__filter-text-item">
                        VOODOO - is the TOP-3 Facebook & Instagram paid advertising school based in Ukraine.
                    </div>
                </div>
            </div>
        </div>
        <div class="case-intro__block layout">

            <div class="case-intro__work animation__block">
                <div class="case-intro__work-items">
                    <div class="case-intro__work-item">
                        Brand identity
                    </div>
                    <div class="case-intro__work-item">
                        WOW website
                    </div>
                </div>

                <div class="case-intro__work-img-wrapper">
                    <img onload="setLoadState()" data-loader-img class="case-intro__work-img" src="./assets/images/intro-img.jpg">
                </div>

                <div class="case-intro__desc">
                    <div class="case-intro__desc-item">
                        <div class="case-intro__desc-item-name animation__title-wrapper">
                            <div class="animation__title">
                                Challenge:
                            </div>
                        </div>
                        <div class="case-intro__desc-item-text">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Create a WOW one-page
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    website to effectively attract
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    new students.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-intro__desc-item case-intro__desc-item--client">
                        <div class="case-intro__desc-item-name">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Client:
                                </div>
                            </div>

                        </div>
                        <div class="case-intro__desc-item-text">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    VOODOO - is the TOP-3
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Facebook & Instagram
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    paid advertising school
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    based in Ukraine.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-intro__title">
                    <div class="animation__title-wrapper">
                        <div class="animation__title">
                            Voodoo
                        </div>
                    </div>
                </div>

                <div class="case-intro__title-mobile">
                    <div class="clients__text-row">
                        <div class="clients__text-row-line clients__text-row-line--1">
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                        </div>
                        <div class="clients__text-row-line clients__text-row-line--2">
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                            <div class="clients__text-row-item">Voodoo</div>
                        </div>
                    </div>
                </div>

                <div class="case-intro__img-wrapper animation__img-parallax">
                    <img onload="setLoadState()" data-loader-img class="case-intro__img animation__img-parallax-item" src="./assets/images/intro-cover.jpg">
                </div>

                <div class="case-intro__results">
                    <div class="case-intro__results-title">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                Results:
                            </div>
                        </div>

                    </div>
                    <div class="case-intro__counters">
                        <div class="case-intro__counters-item">
                            <div class="case-intro__counter animation__counter" data-animation-counter="33">33</div>
                            <div class="case-intro__counter-desc">
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            increase in profit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="case-intro__counters-item">
                            <div class="case-intro__counter animation__counter" data-animation-counter="154">154</div>
                            <div class="case-intro__counter-desc">
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            Increase
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            page time
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            view.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="case-intro__screenshots animation__block">
                <div class="case-intro__screenshots-item">
                    <div class="case-intro__screenshots-item-sizes case-intro__screenshots-item-sizes--desktop">
                        <div class="case-intro__screenshots-item-sizes-name">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Desktop:
                                </div>
                            </div>
                        </div>
                        <div class="case-intro__screenshots-item-sizes-item">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    1920
                                </div>
                            </div>
                        </div>
                    </div>
                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-img case-intro__screenshots-img--desktop case-intro__screenshots-img--for-mobile-desc"
                         src="./assets/images/screenshot-1-mob.jpg">
                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-img case-intro__screenshots-img--desktop case-intro__screenshots-img--for-desc-desc"
                         src="./assets/images/screenshot-1.jpg">

                    <div class="case-intro__screenshots-item-analysis">
                        <div class="case-intro__screenshots-item-analysis-title">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Analysis:
                                </div>
                            </div>
                        </div>
                        <div class="case-intro__screenshots-item-analysis-items">
                            <div class="case-intro__screenshots-item-analysis-item">
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            The company positions the
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            product as a practical course
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            without unnecessary
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            information. The school has
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            three target audiences:
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            students, entrepreneurs, and
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            marketers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-intro__screenshots-item-analysis-item">
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            Analyzing competitors,
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            we realized that most of
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            them use template
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            websites for one-time
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            launches. We had to
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            create a traffic tool to
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            serve the business for a
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            few years.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-intro__screenshots-item case-intro__screenshots-item--mobile">
                    <div class="case-intro__screenshots-item-sizes">
                        <div class="case-intro__screenshots-item-sizes-name">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Mobile:
                                </div>
                            </div>
                        </div>
                        <div class="case-intro__screenshots-item-sizes-item">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    375
                                </div>
                            </div>
                        </div>
                    </div>
                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-img case-intro__screenshots-img--mobile"
                         src="./assets/images/screenshot-2.jpg">
                </div>

                <div class="case-intro__screenshots-item case-intro__screenshots-item--for-mobile">
                    <div class="case-intro__screenshots-item-parallax animation__img-parallax">
                        <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-item-parallax-img animation__img-parallax-item"
                             src="./assets/images/screenshot-2-parallax.png">
                    </div>

                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-item-img" src="./assets/images/screen-mobile-2.png">
                </div>
            </div>
        </div>

    </div>


    <div class="animation__screen user-experience">
        <div class="user-experience__block layout animation__block">

            <div class="user-experience__block-name">
                <div class="animation__title-wrapper">
                    <div class="animation__title">
                        UX
                    </div>
                </div>

            </div>

            <div class="user-experience__content">
                <div class="user-experience__title">
                    <div class="user-experience__title-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                User
                            </div>
                        </div>
                    </div>
                    <div class="user-experience__title-line user-experience__title-line--dot">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                experience
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-experience__desc">
                    <div class="user-experience__desc-item user-experience__desc-item--big">
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    The website structure
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    was built according to
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the marketing funnel to
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    sell info-products. At the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    start, users get useful
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    information, and after a
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    price offer.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="user-experience__desc-item user-experience__desc-item--small">
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Because the site is the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    main sales tool in the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    company’s marketing
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    funnel, the main
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    target action is
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    “buying a course”.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="animation__screen user-experience animation__block">
        <div class="user-experience__block user-experience__block--second layout">

            <div class="user-experience__content">
                <div class="user-experience__images-wrapper">
                    <div class="user-experience__images-wrapper-circle"></div>
                    <div class="user-experience__images-inner">
                        <div class="animation__text-x-scroll animation__text-x-scroll--user-experience">
                            <div class="user-experience__images animation__text-x-scroll-item">
                                <img onload="setLoadState()" data-loader-img class="user-experience__image" src="./assets/images/ux-1.png"
                                     alt="user-experience">
                                <img onload="setLoadState()" data-loader-img class="user-experience__image" src="./assets/images/ux-2.png"
                                     alt="user-experience">
                            </div>
                        </div>
                    </div>

                    <div class="user-experience__image-for-mobile">
                        <div class="case-intro__screenshots-item">
                            <div class="case-intro__screenshots-item-sizes case-intro__screenshots-item-sizes--desktop">
                                <div class="case-intro__screenshots-item-sizes-name">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            Desktop:
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-sizes-item">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            1920
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-img case-intro__screenshots-img--desktop"
                                 src="./assets/images/screenshot-3-mob.jpg">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen user-experience animation__block">
        <div class="user-experience__block user-experience__block--second layout">

            <div class="user-experience__block-name user-experience__block-name--mobile-hidden">
                <div class="animation__title-wrapper">
                    <div class="animation__title">
                        UI
                    </div>
                </div>

            </div>

            <div class="user-experience__content">
                <div class="user-experience__title">
                    <div class="user-experience__title-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                User
                            </div>
                        </div>
                    </div>
                    <div class="user-experience__title-line user-experience__title-line--dot">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                interface
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-experience__desc user-experience__desc--fill">
                    <div class="user-experience__desc-item user-experience__desc-item--big">
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    We connected the style of
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the educational platform
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    with the concept of
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    futurism and technology to
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    show that this profession is
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    a part of the future.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-experience__colors">
                    <div class="user-experience__colors-item user-experience__colors-item--main">
                        <div class="user-experience__colors-item-name user-experience__colors-item-name--main">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Wet asphalt
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="user-experience__colors-item user-experience__colors-item--natural">
                        <div class="user-experience__colors-item-name user-experience__colors-item-name--natural">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Emerald shade
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="user-experience__colors-desc">
                    <div class="user-experience__colors-desc-name">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                Colors:
                            </div>
                        </div>
                    </div>
                    <div class="user-experience__colors-desc-text">
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    The blue color
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    follows the chosen
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    concept, while pink
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    adds expression
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    and contrast. To
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    evoke a vivid
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    experience, we
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    have added juicy
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    video backgrounds
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    and animation
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    gradients.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen case-intro animation__block">

        <div class="case-intro__block layout">
            <div class="case-intro__screenshots">
                <div class="case-intro__screenshots-item">
                    <div class="case-intro__screenshots-item-sizes case-intro__screenshots-item-sizes--desktop">
                        <div class="case-intro__screenshots-item-sizes-name">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Desktop:
                                </div>
                            </div>
                        </div>
                        <div class="case-intro__screenshots-item-sizes-item">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    1920
                                </div>
                            </div>
                        </div>
                    </div>
                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-img case-intro__screenshots-img--desktop"
                         src="./assets/images/screenshot-3.jpg">
                </div>
                <div class="case-intro__screenshots-item case-intro__screenshots-item--mobile">
                    <div class="case-intro__screenshots-item-sizes">
                        <div class="case-intro__screenshots-item-sizes-name">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Mobile:
                                </div>
                            </div>
                        </div>
                        <div class="case-intro__screenshots-item-sizes-item">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    375
                                </div>
                            </div>
                        </div>
                    </div>
                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-img case-intro__screenshots-img--mobile"
                         src="./assets/images/screenshot-4.jpg">
                </div>
            </div>
        </div>

    </div>

    <div class="animation__screen testimonial animation__block">

        <div class="testimonial__block layout">

            <div class="testimonial__title-block">
                <div class="testimonial__title">
                    <div class="animation__title-wrapper">
                        <div class="animation__title">
                            Testimonial
                        </div>
                    </div>

                </div>

                <div class="testimonial__subtitle">
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                The client
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                demonstrated our
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                website in his
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                educational
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                Instagram profile as
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                an example of an
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                effective tool for
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                managing user
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                attention.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial__content">

                <svg class="testimonial__content-quotes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.54 51.94">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: var(--main-case-color);
                            }</style>
                    </defs>
                    <path class="cls-1"
                          d="M0,37.81a42.41,42.41,0,0,1,5.17-19.7A68.79,68.79,0,0,1,18.51,0l.79.8Q7.17,13.53,7.16,24.48c.4,3.05,1.07,5.17,2,6.37a39,39,0,0,0,6.57,4.57Q20.29,39,20.3,43.58a7.53,7.53,0,0,1-2.79,6,9.58,9.58,0,0,1-6.76,2.39A9.45,9.45,0,0,1,3,48.16Q0,44.38,0,37.81Z"/>
                    <path class="cls-1"
                          d="M24.24,37.81a42.43,42.43,0,0,1,5.18-19.7A68.75,68.75,0,0,1,42.75,0l.8.8Q31.4,13.53,31.41,24.48q.6,4.57,2,6.37A38.59,38.59,0,0,0,40,35.42q4.58,3.59,4.57,8.16a7.55,7.55,0,0,1-2.78,6A9.6,9.6,0,0,1,35,51.94a9.43,9.43,0,0,1-7.76-3.78Q24.24,44.38,24.24,37.81Z"/>
                </svg>
                <div class="testimonial__item-wrapper">
                    <div class="testimonial__item animation__texting-item">
                        The site is 11 points out of 10. Comments are unnecessary.
                    </div>

                    <div class="testimonial__item-name">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                Dmitry Babich, Co-Founder — Voodoo.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial__screenshots">
                    <div class="testimonial__background">
                        <div class="case-intro__filter-text-wrapper">
                            <div class="case-intro__filter-text case-intro__filter-text--background">
                                <div class="case-intro__filter-text-item">
                                    VOODOO - is the TOP-3 Facebook & Instagram paid advertising school based in Ukraine.
                                </div>
                            </div>
                            <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                                 data-flashlight-size="11.07">
                                <div class="case-intro__filter-text-item">
                                    VOODOO - is the TOP-3 Facebook & Instagram paid advertising school based in Ukraine.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__screenshots-item testimonial__screenshots-item--1">
                        <div class="testimonial__screenshots-item-name-block">
                            <div class="testimonial__screenshots-item-name">
                                <div class="animation__title-wrapper">
                                    <div class="animation__title">
                                        Website:
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__screenshots-item-name-title">
                                <div class="animation__title-wrapper">
                                    <div class="animation__title">
                                        facebook-ads-wizard.voodooecom.com
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img onload="setLoadState()" data-loader-img class="testimonial__screenshots-item-img" src="./assets/images/screen-mobile-1.png">
                    </div>

                    <div class="testimonial__screenshots-item testimonial__screenshots-item--2">
                        <img onload="setLoadState()" data-loader-img class="testimonial__screenshots-item-img" src="./assets/images/screen-mobile-2.png">
                        <div class="testimonial__screenshots-item-name-block testimonial__screenshots-item-name-block--top">
                            <div class="testimonial__screenshots-item-name-title">

                                <div class="testimonial__circle">
                                    <div class="logo-circle">
                                        <div class="logo-circle__item">
                                            <img onload="setLoadState()" data-loader-img class="logo-circle__text"
                                                 src="../../assets/images/circle-text-white.svg">
                                            <img onload="setLoadState()" data-loader-img class="logo-circle__logo" src="../../assets/images/logo-white.svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="animation__title-wrapper">
                                    <div class="animation__title">
                                        By Svitlo.Production
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="animation__screen have-a-task have-a-task--white have-a-task--case">
        <div class="have-a-task__block layout">

            <div class="animation__block">
                <div class="have-a-task__title-wrapper">
                    <div class="have-a-task__title">
                        <div class="have-a-task__title-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Wanna get
                                </div>
                            </div>

                        </div>
                        <div class="have-a-task__title-line have-a-task__title-line--2">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the result?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require('../../parts/form.php'); ?>

            </div>
        </div>
    </div>

    <div class="animation__screen portfolio">
        <div class="animation__block portfolio__title-block layout">
            <div class="portfolio__title">
                <div class="portfolio__title-text portfolio__title-text--case">
                    <div class="animation__title-wrapper">
                        <div class="animation__title portfolio__title-text-line">
                            View more
                        </div>
                    </div>
                </div>

            </div>
            <div class="portfolio__subtitle portfolio__subtitle--case">
                <div class="animation__text-wrapper">
                    <div class="animation__text">
                        Check out other case studies
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio__slider">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/parts/slider.php';
            echo createSlider('voodoo');
            ?>
        </div>
    </div>

    <?php require('../../parts/footer.php'); ?>

</div>

<?php require('../../parts/modal-form.php'); ?>
<?php require('../../parts/modal-thank-you.php'); ?>
<?php require('../../parts/menu.php'); ?>


<script src="../../dist/<?= $js ?>"></script>


</body>
</html>