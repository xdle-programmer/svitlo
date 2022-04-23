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
            <div class="intro__about-title">
                <div class="intro__about-title-line intro__about-title-line--1">We don't</div>
                <div class="intro__about-title-line intro__about-title-line--2">create</div>
            </div>
            <div class="intro__about-desc">
                <div class="intro__about-desc-item intro__about-desc-item--1">
                    ordinary websites
                </div>
                <div class="intro__about-desc-item intro__about-desc-item--2">
                    <div class="intro__about-desc-item-line">we create</div>
                    <div class="intro__about-desc-item-line">marketing</div>
                    <div class="intro__about-desc-item-line">and sales</div>
                    <div class="intro__about-desc-item-line">tools.</div>
                </div>
            </div>
            <div class="intro__about-link">
                <div class="intro__about-link-text">View</div>
                <img class="intro__about-link-icon" src="assets/icons/play-main.svg">
                <div class="intro__about-link-text">showreel</div>
            </div>
        </div>
    </div>
</div>

<div class="businesses">
    <div class="businesses__block layout">
        <div class="businesses__title">We help businesses</div>
        <div class="businesses__desc">
            <div class="businesses__desc-item businesses__desc-item--1">achieve their goals in digital.</div>
            <div class="businesses__desc-item businesses__desc-item--2">
                <div class="businesses__desc-item-line">We developed our</div>
                <div class="businesses__desc-item-line">own methodology,</div>
                <div class="businesses__desc-item-line">which successfully</div>
                <div class="businesses__desc-item-line">shows itself</div>
            </div>
        </div>

        <div class="businesses__icon-block">
            <div class="businesses__icon">
                <div class="businesses__icon-item businesses__icon-item--1"></div>
                <div class="businesses__icon-item businesses__icon-item--2"></div>
            </div>
            <div class="businesses__icon-title">We combine</div>
        </div>

        <div class="businesses__subtitle">
            <div class="businesses__subtitle-item businesses__subtitle-item--1">Marketing</div>
            <div class="businesses__subtitle-item businesses__subtitle-item--2">with Design</div>
            <div class="businesses__subtitle-item businesses__subtitle-item--3">to achieve our client's business goals.
                It gives more sales, leads, and recognition.
            </div>
        </div>

    </div>
</div>

<div class="lets-discuss">
    <div class="lets-discuss__block layout">
        <div class="lets-discuss__desc">
            <div class="lets-discuss__desc-item lets-discuss__desc-item--1">A website is primarily a marketing tool and
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
                <div class="lets-discuss__link-block-title-item lets-discuss__link-block-title-item--bold">talked
                    about
                </div>
            </div>

            <div class="lets-discuss__link-item">Let's discuss.</div>
        </div>
    </div>
</div>


<div class="process">
    <div class="process__block layout">
        <div class="process__icon"></div>
        <div class="process__title-block">
            <div class="process__title">Our process</div>
            <div class="process__subtitle">The path to achieving the result</div>
        </div>

        <div class="process__items">
            <div class="process__item">
                <div class="process__item-number">01</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">Interview</div>
                    <div class="process__item-desc-text">We discuss your business and the goals that you want to achieve. The main point is to take a look at your business from the side, find growth points and determine the goal</div>
                </div>
            </div>
            <div class="process__item">
                <div class="process__item-number">02</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">Strategy</div>
                    <div class="process__item-desc-text">Strategy is the key to success. We develop the plan to achieve the desired result, which we identified during the interview. Success will depend on the right strategy.</div>
                </div>
            </div>
            <div class="process__item">
                <div class="process__item-number">03</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">UX</div>
                    <div class="process__item-desc-text">We analyze the target audience, competitors, CJM, marketing, sales, and implement marketing features. Each section of the site should do its own tasks to perform the aim.</div>
                </div>
            </div>
            <div class="process__item">
                <div class="process__item-number">04</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">UI</div>
                    <div class="process__item-desc-text">Packaging plays an important role in business. We will work out the emotional components and create the right impression about your company.</div>
                </div>
            </div>
            <div class="process__item">
                <div class="process__item-number">05</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">Development</div>
                    <div class="process__item-desc-text">The technical part of the implementation of your project. We will make sure that everything works as it should, and you receive all leads and payments.</div>
                </div>
            </div>
            <div class="process__item">
                <div class="process__item-number">06</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">Marketing</div>
                    <div class="process__item-desc-text">Once the site is ready, it's time to make it work. Our team is ready to promote your business through SEO, Google, YouTube, Facebook, Instagram, TikTok ads, and other channels.</div>
                </div>
            </div>
            <div class="process__item">
                <div class="process__item-number">07</div>
                <div class="process__item-desc">
                    <div class="process__item-desc-title">Improvement</div>
                    <div class="process__item-desc-text">We are interested in providing you with the best results. After receiving the first data, we analyze it and move on to planning larger changes and implementations to improve outcome.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./dist/<?= $js ?>"></script>
</body>
</html>