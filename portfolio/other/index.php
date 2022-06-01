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
            --main-case-color: #e24f26;
            --main-case-color-pseudo-opacity: #141414;
            --natural-case-color: #131313;

            --main-text-color: #fff;
            --natural-text-color: #262626;
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
                        OTHER - is a complex Internet marketing agency. More than 4 years in the digital market with an average project LTV of 8 months.
                    </div>
                </div>
                <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                     data-flashlight-size="11.07">
                    <div class="case-intro__filter-text-item">
                        OTHER - is a complex Internet marketing agency. More than 4 years in the digital market with an average project LTV of 8 months.
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
                                    Attract target customers
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    and increase awareness on
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    the Internet.
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
                                    OTHER. - is a marketing
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    agency. More than 4 years
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    in the digital market with
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    an average project LTV of
                                </div>
                            </div>
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    8 months.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-intro__title">
                    <div class="animation__title-wrapper">
                        <div class="animation__title">
                            Other
                        </div>
                    </div>
                </div>

                <div class="case-intro__title-mobile">
                    <div class="clients__text-row">
                        <div class="clients__text-row-line clients__text-row-line--1">
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                        </div>
                        <div class="clients__text-row-line clients__text-row-line--2">
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
                            <div class="clients__text-row-item">Other</div>
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
                            <div class="case-intro__counter animation__counter" data-animation-counter="72">72</div>
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
                                            lead
                                        </div>
                                    </div>

                                </div>
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            generation.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="case-intro__counters-item">
                            <div class="case-intro__counter animation__counter" data-animation-counter="114">114</div>
                            <div class="case-intro__counter-desc">
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            increase
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            brand
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__counter-desc-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            recognition.
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
                                            The company provides full
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            marketing services, from
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            creating content on social
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            networks to attracting
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            customers. Mostly they work
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            with medium and large
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            businesses in Ukraine, and
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            position themselves as
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            “OTHER.” specialists, unlike
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            the general marketing
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            agencies. The team very well
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            knows the main problems of
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            cheap contractors, and
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            therefore they don't make
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            similar mistakes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-intro__screenshots-item-analysis-item">
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            Most agencies create
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            similar websites that
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            don't differ from
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            competitors and use
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            template communication
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            with users. Our task is to
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            highlight the “OTHER.”
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            agency and present them
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            according to their
                                        </div>
                                    </div>
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">
                                    <div class="animation__title-wrapper">
                                        <div class="animation__title">
                                            positioning.
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
                                    The structure and texts
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    are built to unobtrusively
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    introduce the product,
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    attitude, and philosophy
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    of the “OTHER.” brand.
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    The website answers
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    99% of the frequently
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    asked target audience's
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    questions.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="user-experience__desc-item user-experience__desc-item--small">
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    The main target action is a
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    free consultation and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    marketing audit. In that
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    type of business, it's
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    impossible to make an offer
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    and achieve the desired
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    results without identifying
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    clients' needs.
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
                                    The challenge was to underline the
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    agency's message “OTHER.” through
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    web design, brand identity, and visually
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__desc-item-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    strengthening text meaning.
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
                                    The client asked to
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    add street style and
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    memes so that
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    users could read
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    easily and make
                                </div>
                            </div>
                        </div>
                        <div class="user-experience__colors-desc-text-line">
                            <div class="animation__title-wrapper">
                                <div class="animation__title">
                                    them smile.
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
                                The process went
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                smoothly, we were on
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                the same wave. Our
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                approach allowed us
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                to determine real
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                client's needs and
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__subtitle-line">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                meet expectations.
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
                        We had started work with another agency before you, but they did not get our needs and offered a lot of template solutions. Your approach hit us right in the heart. Thank you.
                    </div>

                    <div class="testimonial__item-name">
                        <div class="animation__title-wrapper">
                            <div class="animation__title">
                                Amiran Sanaya, Co-Founder Other.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial__screenshots">
                    <div class="testimonial__background">
                        <div class="case-intro__filter-text-wrapper">
                            <div class="case-intro__filter-text case-intro__filter-text--background">
                                <div class="case-intro__filter-text-item">
                                    OTHER - is a complex Internet marketing agency. More than 4 years in the digital market with an average project LTV of 8 months.
                                </div>
                            </div>
                            <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                                 data-flashlight-size="11.07">
                                <div class="case-intro__filter-text-item">
                                    OTHER - is a complex Internet marketing agency. More than 4 years in the digital market with an average project LTV of 8 months.
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
                                        other-digital.com
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
            echo createSlider('other');
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