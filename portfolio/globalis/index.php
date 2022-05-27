<!DOCTYPE html>
<html lang="ru" style="background: #020305">
<head>
    <meta charset="UTF-8">
    <title>Svitlo</title>

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
            --main-case-color: #14837d;
            --main-case-color-pseudo-opacity: #091011;
            --natural-case-color: #162122;

            --main-text-color: #fff;
            --natural-text-color: #282F31;
        }
    </style>
</head>
<body>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php'); ?>

<div class="animation">

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
                        Globalis Insurance Company was founded in 1997. The company is listed in the TOP 20 companies on
                        the Ukrainian corporate property insurance market
                    </div>
                </div>
                <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                     data-flashlight-size="11.07">
                    <div class="case-intro__filter-text-item">
                        Globalis Insurance Company was founded in 1997. The company is listed in the TOP 20 companies on
                        the Ukrainian corporate property insurance market
                    </div>
                </div>
            </div>
        </div>
        <div class="case-intro__block layout">

            <div class="case-intro__work">
                <div class="case-intro__work-items">
                    <div class="case-intro__work-item">Brand identity</div>
                    <div class="case-intro__work-item">Corporate website</div>
                </div>
                <div class="case-intro__work-img-wrapper">
                    <img class="case-intro__work-img" src="./assets/images/intro-img.jpg">
                </div>
                <div class="case-intro__desc">
                    <div class="case-intro__desc-item">
                        <div class="case-intro__desc-item-name">Challenge:</div>
                        <div class="case-intro__desc-item-text">Get more customers through digital.</div>
                    </div>
                    <div class="case-intro__desc-item case-intro__desc-item--client">
                        <div class="case-intro__desc-item-name">Client:</div>
                        <div class="case-intro__desc-item-text">Globalis Insurance Company was founded in 1997. The
                            company is listed in the TOP 20 companies on the Ukrainian corporate property insurance
                            market.
                        </div>
                    </div>
                </div>
            </div>

            <div class="case-intro__cover">
                <div class="case-intro__title">Globalis</div>

                <div class="case-intro__img-wrapper animation__img-parallax">
                    <img class="case-intro__img animation__img-parallax-item" src="./assets/images/intro-cover.jpg">
                </div>

                <div class="case-intro__results">
                    <div class="case-intro__results-title">Results:</div>
                    <div class="case-intro__counters">
                        <div class="case-intro__counters-item">
                            <div class="case-intro__counter animation__counter" data-animation-counter="166">166</div>
                            <div class="case-intro__counter-desc">
                                <div class="case-intro__counter-desc-line">Increase</div>
                                <div class="case-intro__counter-desc-line">lead</div>
                                <div class="case-intro__counter-desc-line">generation.</div>
                            </div>
                        </div>

                        <div class="case-intro__counters-item">
                            <div class="case-intro__counter animation__counter" data-animation-counter="72">72</div>
                            <div class="case-intro__counter-desc">
                                <div class="case-intro__counter-desc-line">Increase</div>
                                <div class="case-intro__counter-desc-line">page time</div>
                                <div class="case-intro__counter-desc-line">view.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="case-intro__screenshots">
                <div class="case-intro__screenshots-item">
                    <div class="case-intro__screenshots-item-sizes case-intro__screenshots-item-sizes--desktop">
                        <div class="case-intro__screenshots-item-sizes-name">Desktop:</div>
                        <div class="case-intro__screenshots-item-sizes-item">1920</div>
                    </div>
                    <img class="case-intro__screenshots-img case-intro__screenshots-img--desktop"
                         src="./assets/images/screenshot-1.jpg">

                    <div class="case-intro__screenshots-item-analysis">
                        <div class="case-intro__screenshots-item-analysis-title">Analysis:</div>
                        <div class="case-intro__screenshots-item-analysis-items">
                            <div class="case-intro__screenshots-item-analysis-item">
                                <div class="case-intro__screenshots-item-analysis-item-line">Globalis provides</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">insurance services for
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">B2C and B2B sectors. The
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">core of the target</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">audience is legal
                                    entities,
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">their representatives in
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">the age range of 35-45.
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">The main motivation for
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">this category is to save
                                </div>
                                <div class="case-intro__screenshots-item-analysis-item-line">money when an insured</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">event occurs.</div>
                            </div>
                            <div class="case-intro__screenshots-item-analysis-item">
                                <div class="case-intro__screenshots-item-analysis-item-line">Analyzing the</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">market, we realized</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">that companies are</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">visually similar on</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">the Internet, and do</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">not stand out from</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">competitors. Their</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">websites with low</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">usability are not</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">adapted to finding</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">needed information</div>
                                <div class="case-intro__screenshots-item-analysis-item-line">quickly.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-intro__screenshots-item case-intro__screenshots-item--mobile">
                    <div class="case-intro__screenshots-item-sizes">
                        <div class="case-intro__screenshots-item-sizes-name">Mobile:</div>
                        <div class="case-intro__screenshots-item-sizes-item">375</div>
                    </div>
                    <img class="case-intro__screenshots-img case-intro__screenshots-img--mobile"
                         src="./assets/images/screenshot-2.jpg">
                </div>
            </div>
        </div>

    </div>


    <div class="animation__screen user-experience">
        <div class="user-experience__block layout">

            <div class="user-experience__block-name">UX</div>

            <div class="user-experience__content">
                <div class="user-experience__title">
                    <div class="user-experience__title-line">User</div>
                    <div class="user-experience__title-line user-experience__title-line--dot">experience</div>
                </div>

                <div class="user-experience__desc">
                    <div class="user-experience__desc-item user-experience__desc-item--big">
                        <div class="user-experience__desc-item-line">The website</div>
                        <div class="user-experience__desc-item-line">structure gradually</div>
                        <div class="user-experience__desc-item-line">presents the status</div>
                        <div class="user-experience__desc-item-line">of the company and</div>
                        <div class="user-experience__desc-item-line">gives a convenient</div>
                        <div class="user-experience__desc-item-line">segmentation of</div>
                        <div class="user-experience__desc-item-line">services according</div>
                        <div class="user-experience__desc-item-line">to customer</div>
                        <div class="user-experience__desc-item-line">categories.</div>
                    </div>

                    <div class="user-experience__desc-item user-experience__desc-item--small">
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">Also, we
                            gave the opportunity
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">to explore
                            each product in
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">detail with
                            a separate page.
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">The target
                            action on the site
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">is to fill
                            out the form and
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">collect
                            contact information
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">for further
                            consultation with a
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">manager. As
                            a feature, we
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">added the
                            possibility to
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">download the
                            necessary
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">
                            documentation and get
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">acquainted
                            with the
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">company's
                            development
                        </div>
                        <div class="user-experience__desc-item-line user-experience__desc-item-line--small">strategy.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="animation__screen user-experience">
        <div class="user-experience__block user-experience__block--second layout">

            <div class="user-experience__content">
                <div class="user-experience__images-wrapper">
                    <div class="user-experience__images-wrapper-circle"></div>
                    <div class="user-experience__images-inner">
                        <div class="animation__text-x-scroll animation__text-x-scroll--user-experience">
                            <div class="user-experience__images animation__text-x-scroll-item">
                                <img class="user-experience__image" src="./assets/images/ux-1.png"
                                     alt="user-experience">
                                <img class="user-experience__image" src="./assets/images/ux-2.png"
                                     alt="user-experience">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen user-experience">
        <div class="user-experience__block user-experience__block--second layout">

            <div class="user-experience__block-name">UI</div>

            <div class="user-experience__content">
                <div class="user-experience__title">
                    <div class="user-experience__title-line">User</div>
                    <div class="user-experience__title-line user-experience__title-line--dot">interface</div>
                </div>

                <div class="user-experience__desc user-experience__desc--fill">
                    <div class="user-experience__desc-item user-experience__desc-item--big">
                        <div class="user-experience__desc-item-line">The minimalist design with large</div>
                        <div class="user-experience__desc-item-line">typography emphasizes the</div>
                        <div class="user-experience__desc-item-line">openness of the brand in</div>
                        <div class="user-experience__desc-item-line">communication with customers.</div>
                    </div>
                </div>

                <div class="user-experience__colors">
                    <div class="user-experience__colors-item user-experience__colors-item--main">
                        <div class="user-experience__colors-item-name user-experience__colors-item-name--main">Wet
                            asphalt
                        </div>
                    </div>
                    <div class="user-experience__colors-item user-experience__colors-item--natural">
                        <div class="user-experience__colors-item-name user-experience__colors-item-name--natural">
                            Emerald shade
                        </div>
                    </div>
                </div>

                <div class="user-experience__colors-desc">
                    <div class="user-experience__colors-desc-name">Colors:</div>
                    <div class="user-experience__colors-desc-text">
                        <div class="user-experience__colors-desc-text-line">Premium,</div>
                        <div class="user-experience__colors-desc-text-line">restrained colors</div>
                        <div class="user-experience__colors-desc-text-line">perfectly</div>
                        <div class="user-experience__colors-desc-text-line">underline the</div>
                        <div class="user-experience__colors-desc-text-line">level of the</div>
                        <div class="user-experience__colors-desc-text-line">company.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation__screen case-intro">

        <div class="case-intro__block layout">
            <div class="case-intro__screenshots">
                <div class="case-intro__screenshots-item">
                    <div class="case-intro__screenshots-item-sizes case-intro__screenshots-item-sizes--desktop">
                        <div class="case-intro__screenshots-item-sizes-name">Desktop:</div>
                        <div class="case-intro__screenshots-item-sizes-item">1920</div>
                    </div>
                    <img class="case-intro__screenshots-img case-intro__screenshots-img--desktop"
                         src="./assets/images/screenshot-3.jpg">
                </div>
                <div class="case-intro__screenshots-item case-intro__screenshots-item--mobile">
                    <div class="case-intro__screenshots-item-sizes">
                        <div class="case-intro__screenshots-item-sizes-name">Mobile:</div>
                        <div class="case-intro__screenshots-item-sizes-item">375</div>
                    </div>
                    <img class="case-intro__screenshots-img case-intro__screenshots-img--mobile"
                         src="./assets/images/screenshot-4.jpg">
                </div>
            </div>
        </div>

    </div>

    <div class="animation__screen testimonial">

        <div class="testimonial__block layout">

            <div class="testimonial__title-block">
                <div class="testimonial__title">Testimonial</div>

                <div class="testimonial__subtitle">
                    <div class="testimonial__subtitle-line">After the project was</div>
                    <div class="testimonial__subtitle-line">completed, we</div>
                    <div class="testimonial__subtitle-line">presented it to the</div>
                    <div class="testimonial__subtitle-line">board of directors. The</div>
                    <div class="testimonial__subtitle-line">website was approved</div>
                    <div class="testimonial__subtitle-line">on the same day.</div>
                </div>
            </div>

            <div class="testimonial__content">

                <div class="testimonial__item-wrapper">
                    <div class="testimonial__item animation__texting-item">
                        We accepted your project unanimously. The entire board of directors was pleased with the work
                        done. You exceeded all expectations, thank you!
                    </div>

                    <div class="testimonial__item-name">Natalia Voronina, CEO — Globalis.</div>
                </div>

                <div class="testimonial__screenshots">
                    <div class="testimonial__background">
                        <div class="case-intro__filter-text-wrapper">
                            <div class="case-intro__filter-text case-intro__filter-text--background">
                                <div class="case-intro__filter-text-item">
                                    Globalis Insurance Company was founded in 1997. The company is listed in the TOP 20
                                    companies on
                                    the Ukrainian corporate property insurance market
                                </div>
                            </div>
                            <div class="case-intro__filter-text case-intro__filter-text--flashlight flashlight"
                                 data-flashlight-size="11.07">
                                <div class="case-intro__filter-text-item">
                                    Globalis Insurance Company was founded in 1997. The company is listed in the TOP 20
                                    companies on
                                    the Ukrainian corporate property insurance market
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__screenshots-item">
                        <div class="testimonial__screenshots-item-name-block">
                            <div class="testimonial__screenshots-item-name">Website:</div>
                            <div class="testimonial__screenshots-item-name-title">globalis.com.ua</div>
                        </div>
                        <img class="testimonial__screenshots-item-img" src="./assets/images/screen-mobile-1.png">
                    </div>

                    <div class="testimonial__screenshots-item">
                        <img class="testimonial__screenshots-item-img" src="./assets/images/screen-mobile-2.png">
                        <div class="testimonial__screenshots-item-name-block testimonial__screenshots-item-name-block--top">
                            <div class="testimonial__screenshots-item-name-title">By Svitlo.Production</div>
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
                        <div class="have-a-task__title-line">Wanna get</div>
                        <div class="have-a-task__title-line have-a-task__title-line--2">the result?</div>
                    </div>
                </div>

                <?php require('../../parts/form.php'); ?>

            </div>
        </div>
    </div>

    <div class="animation__screen portfolio">
        <div class="animation__block portfolio__title-block layout">
            <div class="portfolio__title">
                <div class="portfolio__title-text">
                    <div class="animation__title-wrapper">
                        <div class="animation__title portfolio__title-text-line">
                            View more
                        </div>
                    </div>
                </div>

            </div>
            <div class="portfolio__subtitle">
                <div class="animation__text-wrapper">
                    <div class="animation__text">
                        Check out other case studies
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio__slider">

            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <!--                        <img class="portfolio__slider-img" src="./assets/images/portfolio-item.jpg">-->
                        <div class="portfolio__slider-img" style="background: #768f94"></div>
                    </div>

                    <div class="swiper-slide">
                        <div class="portfolio__slider-img" style="background: #768f94"></div>
                        <!--                        <img class="portfolio__slider-img" src="./assets/images/portfolio-item.jpg">-->
                    </div>

                    <div class="swiper-slide">
                        <div class="portfolio__slider-img" style="background: #768f94"></div>
                        <!--                        <img class="portfolio__slider-img" src="./assets/images/portfolio-item.jpg">-->
                    </div>
                </div>
            </div>

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