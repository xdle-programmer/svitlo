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


<div class="not-found">

    <div class="not-found__light">
        <div class="light" style="border-radius: 50%;filter: blur(180px)"></div>
    </div>

    <div class="not-found__background">
        <div class="not-found__background-item">404</div>
    </div>
    <div class="not-found__block layout">

        <div class="not-found__top">
            <a href="/" class="not-found__logo">
                <svg class="not-found__logo-img" width="48" height="66" viewBox="0 0 48 66" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path class="not-found__logo-img-item"
                          d="M2.83824 0C3.12798 10.2785 9.50265 16.3291 17.5002 21.1227C21.8143 23.7085 26.4458 25.7668 30.8492 28.2105C37.177 31.7206 42.6934 36.1187 45.8836 42.8277C49.4497 50.3265 47.4224 60.7897 41.2267 66C41.4403 64.4418 41.6325 63.1083 41.8054 61.7726C42.6483 55.2548 40.4022 49.9103 35.0858 46.1274C31.3599 43.4768 27.2156 41.4116 23.3273 38.9757C18.8172 36.1513 14.0986 33.5533 9.98409 30.2306C4.21603 25.5722 0.519025 19.4794 0.0432774 11.8562C-0.217137 7.66443 0.673522 3.70295 2.83824 0Z"/>
                    <path class="not-found__logo-img-item" d="M12.7078 65.9104H0.0818481V51.2915L12.7078 65.9104Z"/>
                    <path class="not-found__logo-img-item" d="M29.6408 0H42.2676V14.6193L29.6408 0Z"/>
                </svg>
            </a>

            <div class="not-found__title-block">
                <div class="not-found__subtitle">Oops ...</div>
                <div class="not-found__title">looks like this page doesn't exist.</div>
            </div>
        </div>

        <div class="not-found__bottom">
            <div class="char-hover">
                <div class="char-hover__item">Portfolio.</div>
            </div>
        </div>

    </div>
</div>

<script src="./dist/<?= $js ?>"></script>


</body>
</html>