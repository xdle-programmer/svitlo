<!DOCTYPE html>
<html lang="en" style="background: #f3f3f3">
<head>
    <meta charset="UTF-8">
    <title>Svitlo Web Production</title>

    <?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/open-graph.php'); ?>

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
            --main-case-color: #e4622a;
            --main-case-color-pseudo-opacity: #E6E6E6;
            --natural-case-color: #06080c;

            --main-text-color: #06080C;
            --natural-text-color: #DDDDDD;
        }
    </style>

    <script>
        window.loadState = [];

        function setLoadState() {
            loadState.push(true);
        }
    </script>
</head>
<body class="body-case">

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/schema.php'); ?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php'); ?>
<script>
    document.querySelector('.header').classList.add('header--black');
</script>
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
                        Edu.pro — TOP-10 performance marketing academy in e-commerce niche on the Ukrainian market.
                    </div>
                </div>
                <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                     data-flashlight-size="11.07">
                    <div class="case-intro__filter-text-item">
                        Edu.pro — TOP-10 performance marketing academy in e-commerce niche on the Ukrainian market.
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
                        One page website
                    </div>
                </div>

                <div class="case-intro__work-img-wrapper">
                    <img onload="setLoadState()" data-loader-img class="case-intro__work-img"
                         src="./assets/images/intro-img.jpg">
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
                                    Create a tool to attract
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    students and present the
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    company.
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
                                    Edu.pro — TOP-10
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    performance
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    marketing academy
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    in e-commerce niche
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    on the Ukrainian
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    market.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-intro__title">
                    <div class="animation__title-wrapper">
                        <div class="animation__title">
                            Edu.pro
                        </div>
                    </div>
                </div>

                <div class="case-intro__title-mobile">
                    <div class="clients__text-row">
                        <div class="clients__text-row-line clients__text-row-line--1">
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                        </div>
                        <div class="clients__text-row-line clients__text-row-line--2">
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                            <div class="clients__text-row-item">Edu.pro</div>
                        </div>
                    </div>
                </div>

                <div class="case-intro__img-wrapper animation__img-parallax">
                    <img onload="setLoadState()" data-loader-img class="case-intro__img animation__img-parallax-item"
                         src="./assets/images/intro-cover.jpg">
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
                    <img onload="setLoadState()" data-loader-img
                         class="case-intro__screenshots-img case-intro__screenshots-img--desktop case-intro__screenshots-img--for-mobile-desc"
                         src="./assets/images/screenshot-1-mob.jpg">
                    <img onload="setLoadState()" data-loader-img
                         class="case-intro__screenshots-img case-intro__screenshots-img--desktop case-intro__screenshots-img--for-desc-desc"
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
                                            The academy was built on
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            the basis of an e-
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            commerce marketing
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            agency and positions
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            itself as a team of
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            practitioners. It sells
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            several educational
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            courses for 2 target
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            audiences: e-commerce
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            entrepreneurs who want
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            to promote their
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            businesses and
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            marketers who want to
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            enter the field.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-intro__screenshots-item-analysis-item">
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            Most marketing
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            training programs are
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            designed for a wide
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            audience, without
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            positioning. In our
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            case, the e-
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            commerce direction
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            is a distinctive feature
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            that needs to be
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            highlighted.
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
                    <img onload="setLoadState()" data-loader-img
                         class="case-intro__screenshots-img case-intro__screenshots-img--mobile"
                         src="./assets/images/screenshot-2.jpg">
                </div>

                <div class="case-intro__screenshots-item case-intro__screenshots-item--for-mobile">
                    <div class="case-intro__screenshots-item-parallax animation__img-parallax">
                        <img onload="setLoadState()" data-loader-img
                             class="case-intro__screenshots-item-parallax-img animation__img-parallax-item"
                             src="./assets/images/screenshot-2-parallax.png">
                    </div>

                    <img onload="setLoadState()" data-loader-img class="case-intro__screenshots-item-img"
                         src="./assets/images/screen-mobile-2.png">
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
                                    When building the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    structure and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    communication on the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    of the company and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    site, the important goal
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    was not to sell products
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    directly but to present
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the company's
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    positioning,
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="user-experience__desc-item user-experience__desc-item--small">
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    give an understanding of
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the demand in a niche and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    communicate in a lively,
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    interesting tone of voice.
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    Based on the aim, we
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    chose 3 target actions:
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    learn more about each
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    program; get on the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    promotional pre-
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    registration; get familiar
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    with the academy on
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    other social networks in
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    order to gain trust and sell
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    at another stage of the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    marketing funnel.
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
                                <img onload="setLoadState()" data-loader-img class="user-experience__image"
                                     src="./assets/images/ux-1.png"
                                     alt="user-experience">
                                <img onload="setLoadState()" data-loader-img class="user-experience__image"
                                     src="./assets/images/ux-2.png"
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
                            <img onload="setLoadState()" data-loader-img
                                 class="case-intro__screenshots-img case-intro__screenshots-img--desktop"
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
                                    Before, the company's style and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the site were made in the classic
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    template solutions.
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
                                    #000000
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="user-experience__colors-item user-experience__colors-item--natural">
                        <div class="user-experience__colors-item-name user-experience__colors-item-name--natural">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    #000000
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
                                    We chose a
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    minimalist design
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    concept in light
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    colors, white and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    friendly orange. In
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    addition, we added a
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    lot of “air”, animation
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    and positioned the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    text so that the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    user’s eyes do not
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    get tired when
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    scrolling.
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
                    <img onload="setLoadState()" data-loader-img
                         class="case-intro__screenshots-img case-intro__screenshots-img--desktop"
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
                    <img onload="setLoadState()" data-loader-img
                         class="case-intro__screenshots-img case-intro__screenshots-img--mobile"
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
                                The client trusted
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                our taste and style,
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                as he saw other
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                projects. By the
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                way, check them
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                out too.
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
                        Guys, the level of work exceeded all expectations! It is understandable why our colleagues
                        recommended you so warmly. We will do the following launches only with you.
                    </div>

                    <div class="testimonial__item-name">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                Dmitry Priskoka, Founder - Edu.pro
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial__screenshots">
                    <div class="testimonial__background">
                        <div class="case-intro__filter-text-wrapper">
                            <div class="case-intro__filter-text case-intro__filter-text--background">
                                <div class="case-intro__filter-text-item">
                                    Edu.pro — TOP-10 performance marketing academy in e-commerce niche on the Ukrainian
                                    market.
                                    Edu.pro — TOP-10 performance marketing academy in e-commerce niche on the Ukrainian
                                    market.
                                </div>
                            </div>
                            <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                                 data-flashlight-size="11.07">
                                <div class="case-intro__filter-text-item">
                                    Edu.pro — TOP-10 performance marketing academy in e-commerce niche on the Ukrainian
                                    market.
                                    Edu.pro — TOP-10 performance marketing academy in e-commerce niche on the Ukrainian
                                    market.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__screenshots-item testimonial__screenshots-item--1">
                        <div class="testimonial__screenshots-item-name-block">
                            <div class="testimonial__screenshots-item-name">
                                <div class="animation__title-wrapper">
                                    <div class="animation__title">

                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__screenshots-item-name-title">
                                <div class="animation__title-wrapper">
                                    <div class="animation__title">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <img onload="setLoadState()" data-loader-img class="testimonial__screenshots-item-img"
                             src="./assets/images/screen-mobile-1.png">
                    </div>

                    <div class="testimonial__screenshots-item testimonial__screenshots-item--2">
                        <img onload="setLoadState()" data-loader-img class="testimonial__screenshots-item-img"
                             src="./assets/images/screen-mobile-2.png">
                        <div class="testimonial__screenshots-item-name-block testimonial__screenshots-item-name-block--top">
                            <div class="testimonial__screenshots-item-name-title">

                                <div class="testimonial__circle">
                                    <div class="logo-circle">
                                        <div class="logo-circle__item">
                                            <img onload="setLoadState()" data-loader-img class="logo-circle__text"
                                                 src="../../assets/images/circle-text.svg">
                                            <img onload="setLoadState()" data-loader-img class="logo-circle__logo"
                                                 src="../../assets/images/logo.svg">
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
            echo createSlider('edu');
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