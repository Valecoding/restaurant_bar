<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Название сайта</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico"/> <!--todo сгенерировать иконску-->
    <link href="https://fonts.googleapis.com/css?family=Rubik&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css"/>
    <link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="libs/nav/component.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/media.css"/>
    <!--<script>
        var insertLinkCss = (function() {
            var path, mark, lastlink;
            lastlink = document.querySelector('link[href="css/media.css"]');
            path = window.location.pathname.toString();
            path = path.split('.');
            mark = '<link rel="stylesheet" type="text/css" href="css' + path[0]+ '.css"/>';
            lastlink.insertAdjacentHTML('afterend',mark);
        })();
        insertLinkCss();
    </script>-->
    <?php if($_SERVER['REQUEST_URI']):?>
    <?php $path = explode ('.',$_SERVER['REQUEST_URI']);?>
    <link rel="stylesheet" type="text/css" href="css<?=$path[0];?>.css"/>
    <?php endif; ?>
</head>
<body>