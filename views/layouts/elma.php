<?php

use app\assets\MainAsset;

MainAsset::register($this);

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="blog-1">
    <div class="container">
        <nav class="navbar navbar-expand-lg menu-font mt-3 d-flex justify-content-between" >
            <div>
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" width="178" height="80,04" alt="" loading="lazy">
                </a>
            </div>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav navigation">
                    <li class="nav-item p-2">
                        <a href="#">Главная</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="#">О продукте</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="#">Стоимость</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="#">О нас</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="#">Отзывы</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="#">Контакты</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="#">Блог</a>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown buttons-mobile">
                        <div class="lang">
                            <select style="background-color: inherit; font-weight: 700; border: none;">
                                <option value="none" selected disabled hidden>РУС</option>
                                <option value="">ENG</option>
                                <option value="">РУС</option>
                            </select>
                        </div>
                        <div class="mobile-menu">
                            <input id="menu-toggle" type="checkbox" />
                            <label class="menu-btn" for="menu-toggle">
                                <span></span>
                            </label>

                            <ul class="menubox">
                                <li><a class="menu-item" href="#">Главная</a></li>
                                <li><a class="menu-item" href="#">О продукте</a></li>
                                <li><a class="menu-item" href="#">Стоимость</a></li>
                                <li><a class="menu-item" href="#">О нас</a></li>
                                <li><a class="menu-item" href="#">Отзывы</a></li>
                                <li><a class="menu-item" href="#">Контакты</a></li>
                                <li><a class="menu-item" href="#">Блог</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<div class="collapse navigation-mobile" id="navbarToggleExternalContent">
    <ul class="navbar-nav" >
        <li class="nav-item p-2">
            <a href="#">Главная</a>
        </li>
        <li class="nav-item p-2">
            <a href="#">О продукте</a>
        </li>
        <li class="nav-item p-2">
            <a href="#">Стоимость</a>
        </li>
        <li class="nav-item p-2">
            <a href="#">О нас</a>
        </li>
        <li class="nav-item p-2">
            <a href="#">Отзывы</a>
        </li>
        <li class="nav-item p-2">
            <a href="#">Контакты</a>
        </li>
        <li class="nav-item p-2">
            <a href="#">Блог</a>
        </li>
    </ul>
</div>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
