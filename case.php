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
        </div>
        <div class="case-intro__block layout">

        </div>

    </div>

</div>

<script src="./dist/<?= $js ?>"></script>


</body>
</html>