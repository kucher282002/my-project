<!-- <?php
    require "php/database.php";
?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/aileron" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/сreating-portfolio.css">
        <link rel="stylesheet" href="css/activs.css">
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header-adm.php';
        ?>
        <main>
            <section class="creat">
                <h2 class="creat__title">Добавить портфолио</h2>
                <form class="creat__form" action="php/addPortfolio.php" method="POST" enctype="multipart/form-data">
                    <div class="creat__body">
                        <div class="creat__info">
                            <div class="info__body">
                                <h3 class="creat__sud-title">Информация о проекте</h3>
                                <ul class="info__body_list">
                                    <li class="info__body_list-inputs"><input class="info__body_list-input" placeholder="Название проекта" name="name"></li>
                                    <li class="info__body_list-inputs"><input class="info__body_list-input" placeholder="Город" name="address"></li>
                                </ul>
                                <ul class="info__body_list">
                                    <li class="info__body_list-inputs"><input class="info__body_list-input" placeholder="Дата проекта" name="date"></li>
                                    <li class="info__body_list-inputs"><input class="info__body_list-input" placeholder="Реализация" name="realisation"></li>
                                </ul>
                                <li><input class="info__body_list-input" placeholder="Заказчик" name="customer"></li>
                            </div>
                            <div class="info__footer">
                                <h3 class="creat__sud-title">Пример</h3>
                                <img class="info__footer_image-img" src="img/98.jpg">
                            </div>
                        </div>
                        <div class="creat__template">
                            <h3 class="creat__sud-title">Шаблон проекта</h3>
                            <p class="creat__mainText">В шаблоне проекта выбирается шаблон располежения  фотографий на странице с развёрнутым проектом.</p>
                            <nav class="template__body">
                                <ul class="template__body_list">
                                    <li>
                                        <label for="template1">
                                            <p><img class="template__body_list-img" src="img/tamplate-four.jpg"></p>
                                        </label>
                                        <input name="template" id="template1" type="radio" class="template__body_list-input" value="1">
                                    </li>
                                </ul>
                                <ul class="template__body_list">
                                    <li>
                                        <label for="template2">
                                            <p><img class="template__body_list-img" src="img/tamplate-three.jpg"></p>
                                        </label>
                                        <input name="template" id="template2" type="radio" class="template__body_list-input" value="2">
                                    </li>
                                </ul>
                                <ul class="template__body_list">
                                    <li>
                                        <label for="template3">
                                            <p><img class="template__body_list-img" src="img/tamplate-two.jpg"></p>
                                        </label>
                                        <input name="template" id="template3" type="radio" class="template__body_list-input" value="3">
                                    </li>
                                </ul>
                                <ul class="template__body_list">
                                    <li>
                                        <label for="template4">
                                            <p><img class="template__body_list-img" src="img/tamplate-one.jpg"></p>
                                        </label>
                                        <input name="template" id="template4" type="radio" class="template__body_list-input" value="4">
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="creat__image">
                            <h3 class="creat__sud-title">Фото проекта</h3>
                            <p class="creat__mainText">Учитывайте что первая загруженная фотография будет отобраться в привью проекта</p>
                            <div class="creat__image_body">
                                <input type="file" name="image[]" id="file" class="inputfile" data-multiple-caption="{count} фото добавлено" multiple />
                                <label for="file">
                                    <span>Добавть фотографий</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="creat__button" name="upload">Добавить в портфолио</button>
                </form>
            </section>
        </main>
        <script src="js/file.js"></script>
        <?php
            include 'php/footer.php';
        ?>
    </body>
</html>