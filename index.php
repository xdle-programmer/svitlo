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

    <script src="./dist/<?= $js ?>"></script>
    <link rel="stylesheet" type="text/css" href="./dist/<?= $css ?>">
</head>
<body>

<div class="intro">
    <div class="intro__block layout">
        <div class="intro__video-block">
            <div class="intro__desc">
                <div class="intro__desc-title">We create websites in combination with marketing, strategy</div>
                <div class="intro__desc-text">& outstanding design.</div>
            </div>
            <div class="intro__name">
                <div class="intro__name-title">Svitle</div>
                <div class="intro__name-text">When business requires results, it comes to us</div>
            </div>
            <div class="intro__video">
                <img class="intro__video-item" src="./assets/video/intro-video-temp.jpg">
            </div>
        </div>

        <div class="intro__about-block">
            <div class="intro__about-button-block">
                <div class="intro__about-button-text">View showreel</div>
                <div class="intro__about-button-item">
                    <div class="intro__about-button-circle"></div>
                    <div class="intro__about-button-icon"></div>
                </div>
            </div>
            <div class="intro__about-title">
                <div class="intro__about-title-line intro__about-title-line--1">We don't</div>
                <div class="intro__about-title-line intro__about-title-line--2">create</div>
            </div>
            <div class="intro__about-desc">
                <div class="intro__about-desc-item intro__about-desc-item--1"></div>
                <div class="intro__about-desc-item intro__about-desc-item--2"></div>
            </div>
            <div class="intro__about-link">
                <div class="intro__about-link-text">View</div>
                <div class="intro__about-link-icon"></div>
                <div class="intro__about-link-text">showreel</div>
            </div>
        </div>
    </div>



</div>

</body>
</html>