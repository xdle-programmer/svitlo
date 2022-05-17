<!DOCTYPE html>
<html lang="ru" style="background: #020305">
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
    <style>
        :root {
            --main-case-color: #14837d;
            --main-case-color-pseudo-opacity: #091011;
            --natural-case-color: #162122;
        }
    </style>
</head>
<body>


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

            <div class="case-intro__counters">
                <div class="case-intro__counter animation__counter" data-animation-counter="166"></div>
                <div class="case-intro__counter animation__counter" data-animation-counter="72"></div>
            </div>

        </div>
        <div class="case-intro__block layout">

        </div>

    </div>


    <div class="animation__screen user-experience">
        <div class="user-experience__block layout">
            <div class="animation__text-x-scroll animation__text-x-scroll--user-experience">

                <div class="user-experience__images">
                    <img class="user-experience__image" src="./assets/cases/globalis/ux-1.png">
                    <img class="user-experience__image" src="./assets/cases/globalis/ux-2.png">
                </div>

            </div>
        </div>
    </div>

    <div class="animation__screen testimonial">
        <div class="testimonial__block layout">
            <div class="testimonial__item animation__texting-item">
                We accepted your project unanimously. The entire board of directors was pleased with the work done. You
                exceeded all expectations, thank you!
            </div>
        </div>
    </div>

</div>

<script src="./dist/<?= $js ?>"></script>


</body>
</html>