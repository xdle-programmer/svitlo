<!DOCTYPE html>
<html lang="ru" style="overflow: visible; background: #020305;position: static">
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
<body style="height:3000px; overflow: visible; background: #020305;position: static">

<div style="height: 100px"></div>

<div class="magnet">
    <canvas class="magnet__canvas"></canvas>
</div>


<script src="./dist/<?= $js ?>"></script>
</body>
</html>