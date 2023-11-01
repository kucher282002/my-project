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

        <script src="splide/dist/js/splide.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/order.css">
        <link rel="stylesheet" href="splide/dist/css/splide-core.min.css">
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header.php';
        ?>
        <main>
            <section class="splide">
                <div class=" questions">      
                    <div class="splide__track">
                        <form class="splide__list questions__form" id="form" action="php/addProject.php" method="POST">
                            <div class="splide__slide question">
                                <h2 class="question__title">С каким пространством мы будем работать?</h2>
                                <nav class="choice">
                                    <ul class="choice__image">
                                        <input type="radio" name="obj" class="choice__image-checkbox" id="apartment" value="Квартира">
                                        <label for="apartment" class="choice__checkbox-body">
                                            <li><img class="choice__image-img" src="img/form/1.jpg"></li>
                                            <li class="choice__image-text">Квартира</li>
                                        </label>
                                    </ul>
                                    <ul class="choice__image">
                                        <input type="radio" name="obj" class="choice__image-checkbox" id="house" value="Дом">
                                        <label for="house" class="choice__checkbox-body">
                                            <li><img class="choice__image-img" src="img/form/2.jpg"></li>
                                            <li class="choice__image-text">Дом</li>
                                        </label>
                                    </ul>
                                    <ul class="choice__image">
                                        <input type="radio" name="obj" class="choice__image-checkbox" id="publicSpace" value="Общественное пространство">
                                        <label for="publicSpace" class="choice__checkbox-body">
                                            <li><img class="choice__image-img" src="img/form/3.jpg"></li>
                                            <li class="choice__image-text">Общественное пространство</li>
                                        </label>
                                    </ul>
                                </nav>
                            </div>
        
                            <div class="splide__slide question">
                                <h2 class="question__title">Какова площадь пространства?</h2>
                                <nav class="choice">
                                    <p><input class="choice__area" type="number" name="area" value="60" min="0" max="999999"></p>
                                </nav>
                            </div>
        
                            <div class="splide__slide question">
                                <h2 class="question__title">Недвижимость является коммерческой или некоммерческой?</h2>
                                <nav class="choice">
                                    <ul class="choice__image">
                                        <input type="radio" name="tipe" class="choice__image-checkbox" id="сommercial" value="Коммерческая">
                                        <label for="сommercial" class="choice__checkbox-body">
                                            <li><img class="choice__image-img" src="img/form/1.jpg"></li>
                                            <li class="choice__image-text">Коммерческая</li>
                                        </label>
                                    </ul>
                                    <ul class="choice__image">
                                        <input type="radio" name="tipe" class="choice__image-checkbox" id="nonprofit" value="Коммерческая">
                                        <label for="nonprofit" class="choice__checkbox-body">
                                            <li><img class="choice__image-img" src="img/form/2.jpg"></li>
                                            <li class="choice__image-text">Некоммерческая</li>
                                        </label>
                                    </ul>
                                </nav>
                            </div>
        
                            <div class="splide__slide question">
                                <h2 class="question__title">С чем мы можем помочь?</h2>
                                <nav class="anketa">
                                    <?php
                                        $qr = "SELECT * FROM services";
                                        $pr = array();
                                        $rs = db::getRowCount($qr, $pr);
                                        while($services = $rs->fetch(PDO::FETCH_OBJ)):
                                    ?>
                                    <ul class="anketa__item">
                                        <li class="anketa__item-text">
                                            <input type="checkbox" name="services[]" class="anketa__item-checkbox" id="scales<?=$services->id_service?>" value="<?=$services->id_service?>">
                                            <label for="scales<?=$services->id_service?>"><?=$services->name?></label>
                                        </li>
                                        <li class="anketa__item-question">(Что это?)</li>
                                    </ul>
                                    <?php endwhile; ?>
                                </nav>
                            </div>
        
                            <div class="splide__slide question">
                                <h2 class="question__title">Какое место положения пространства?</h2>
                                <nav class="location">
                                    <iframe class="location__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17995.546964037105!2d37.684346749999996!3d55.68127905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab5de4f6bfa0f%3A0x18abba8e1dd79409!2z0KHQstC10YLQvtGE0L7RgA!5e0!3m2!1sru!2sru!4v1648989567393!5m2!1sru!2sru"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <p><input class="location__input" type="text" name="address" placeholder="Или введите: Город или улицу"></p>
                                </nav>
                            </div>
        
                            <div class="splide__slide question">
                                <h2 class="question__title">Когда планируете заняться ремонтом?</h2>
                                <nav class="anketa">
                                    <ul class="anketa__item">
                                        <li class="anketa__item-text">
                                            <input type="radio" name="date" class="anketa__item-checkbox" id="date1" value="Сейчас">
                                            <label for="date1">Сейчас</label>
                                        </li>
                                    </ul>
                                    <ul class="anketa__item">
                                        <li class="anketa__item-text">
                                            <input type="radio" name="date" class="anketa__item-checkbox" id="date2" value="В течение 1 месяца">
                                            <label for="date2">В течение 1 месяца</label>
                                        </li>
                                    </ul>
                                    <ul class="anketa__item">
                                        <li class="anketa__item-text">
                                            <input type="radio" name="date" class="anketa__item-checkbox" id="date3" value="В течение 3 месяцев">
                                            <label for="date3">В течение 3 месяцев</label>
                                        </li>
                                    </ul>
                                    <ul class="anketa__item">
                                        <li class="anketa__item-text">
                                            <input type="radio" name="date" class="anketa__item-checkbox" id="date4" value="Через полгода">
                                            <label for="date4">Через полгода</label>
                                        </li>
                                    </ul>
                                    <ul class="anketa__item">
                                        <li class="anketa__item-text">
                                            <input type="radio" name="date" class="anketa__item-checkbox" id="date5" value="Пока не знаю или не планирую">
                                            <label for="date5">Пока не знаю или не планирую</label>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
        
                            <div class="splide__slide question">
                                <h2 class="question__title">Как нам связаться с вами?</h2>
                                <div class="display">
                                    <nav class="communication">
                                        <ul class="anketa__item">
                                            <li class="anketa__item-text">
                                                <input type="radio" name="link" class="anketa__item-checkbox" id="link1" value="По телефону">
                                                <label for="link1">По телефону</label>
                                            </li>
                                        </ul>
                                        <ul class="anketa__item">
                                            <li class="anketa__item-text">
                                                <input type="radio" name="link" class="anketa__item-checkbox" id="link2" value="По WhatsApp">
                                                <label for="link2">По WhatsApp</label>
                                            </li>
                                        </ul>
                                        <ul class="anketa__item">
                                            <li class="anketa__item-text">
                                                <input type="radio" name="link" class="anketa__item-checkbox" id="link3" value="В Telegramm">
                                                <label for="link3">В Telegramm</label>
                                            </li>
                                        </ul>
                                    </nav>
                                    <?php 
                                    if(checkAuth()) {
                                        $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                                        $pr = array(
                                            "token" => $_SESSION["token"],
                                            "session" => session_id()
                                        );
                                        $row = db::getRow($qr, $pr);
                                    ?>
                                    <div class="info">
                                        <p><input class="info__input" type="text" name="user_name" placeholder="Как вас зовут?" value="<?=$row->user_name?>"></p>
                                        <p><input class="info__input" type="tell" name="user_phone" placeholder="Ваш номер телефона" value="<?=$row->user_phone?>"></p>
                                    </div>
                                    <?php } else { ?>
                                    <div class="info">
                                        <p><input class="info__input" type="text" name="user_name" placeholder="Как вас зовут?"></p>
                                        <p><input class="info__input" type="tell" name="user_phone" placeholder="Ваш номер телефона"></p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <button type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form__buttons splide__arrows splide__arrows--ltr">
                    <button type="button" class="form__buttons_back splide__arrow splide__arrow--prev" aria-label="Previous slide" aria-controls="splide01-track">Назад</button>
                    <button type="button" class="form__buttons_next splide__arrow splide__arrow--next" aria-label="Next slide" aria-controls="splide01-track">Далее</button>
                </div> 
                <!-- Add the progress bar element -->
                <div class="my-slider-progress">
                    <div class="my-slider-progress-bar"></div>
                </div>
            </section>
        </main>
        <script src="js/order.js"></script>
    </body>
</html>