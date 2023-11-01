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
        
        <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script> <!--библиоетка паралакс-->
        <script src="https://cdn.jsdelivr.net/npm/ukiyojs@2.0.1/dist/ukiyo.min.js"></script> <!--библиоетка ukiyo-->
        <script src="splide/dist/js/splide.min.js"></script> <!--библиоетка splide-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/main-adaption.css">
        <link rel="stylesheet" href="splide/dist/css/splide.min.css">
        
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header.php';
        ?>
        <main>
            <section class="welcome">
                <div class="welcome__elem1">
                    <div class="welcome__text-img">DESIGN</div>
                    <div class="welcome__motto">
                        <h1 class="welcome__motto_text-title">Студия дизайна интерьера</h1>
                        <h2 class="welcome__motto_text-main">Создаем индивидуальный проекты для вашего бизнеса и жизни</h2>
                        <form action="order.php">
                            <button class="q1 welcome__motto_button">
                                <div class="q2">
                                    <li class="welcome__motto_button-text">Обсудить ваш проект</li>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="welcome__image-stack">
                    <img class="welcome__image-stack_img" src="img/гл.svg">
                </div>
                <!-- <div class="welcome__image-stack">
                    <div class="welcome__image-stack_item welcome__image-stack_item--top1">
                      <img class="welcome__image-stack_img rellax" data-rellax-speed="-1" src="img/welcom/1-center.jpg">
                    </div>
                    <div class="welcome__image-stack_item welcome__image-stack_item--top2">
                        <img class="welcome__image-stack_img rellax" data-rellax-speed="-1" src="img/welcom/2-left.jpg">
                      </div>
                    <div class="welcome__image-stack_item welcome__image-stack_item--bottom1">
                      <img class="welcome__image-stack_img rellax" data-rellax-speed="3" src="img/welcom/1-bg-left-top.jpg">
                    </div>
                    <div class="welcome__image-stack_item welcome__image-stack_item--bottom2">
                        <img class="welcome__image-stack_img rellax" data-rellax-speed="2" src="img/welcom/1-bg-left-boton.jpg">
                    </div>
                    <div class="aboutus__image-stack_item welcome__image-stack_item--bottom3">
                        <img class="welcome__image-stack_img rellax" data-rellax-speed="2" src="img/welcom/1-bg-girght-top.jpg">
                    </div>
                    <div class="aboutus__image-stack_item welcome__image-stack_item--bottom4">
                      <img class="welcome__image-stack_img rellax" data-rellax-speed="-2" src="img/welcom/1-bg-girght-boton.jpg">
                    </div>
                  </div>
                </div> -->
            </section>

            <section class="services">
                <h2 class="services__title">Наши услуги</h2>
                <p class="services__subtitle">Мы создаем функциональные дизайнерские проекты от маленьких до больших пространств</p>
                <ul class="services__categories services__apartment">
                    <li class="services__main-title">Интерьер квартир</li>
                    <div class="services__line"></div>
                    <li class="services__main-text">Мы проектируем интерьеры больших и маленьких квартир. Мы знаем, как создать уют в любой комнате.</li>
                </ul>
                <ul class="services__categories services__privat">
                    <li class="services__main-title">Интерьер общественных пространств</li>
                    <div class="services__line"></div>
                    <li class="services__main-text">Мы разрабатываем проекты различных общественных пространств, соответствующих всем современным тенденциям и технологиям</li>
                </ul>
                <ul class="services__categories services__categories-privat">
                    <li class="services__main-title">Сроительство частных домов</li>
                    <div class="services__line"></div>
                    <li class="services__main-text">Мы строим частные дома любых размеров и создаем уютную обстановку. Закажи проект дома и получи дизайн - проект БЕСПЛАТНО!</li>
                </ul>
            </section>

            <section class="оffer">
                <img class="offer__imege" src="img/icons.svg">
                <nav class="оffer__list">
                    <h2 class="services__title оffer__title-change">Мы предлагаем</h2>
                    <ul class="оffer__list_item">
                        <li class="оffer__list_item-numder">1</li>
                        <li class="оffer__list_item-description">Создадим дизайн-концепцию жилого или общественного пространства</li>
                    </ul>
                    <ul class="оffer__list_item">
                        <li class="оffer__list_item-numder">2</li>
                        <li class="оffer__list_item-description">Подготовим все необходимые чертежи для строительно-монтажных работ</li>
                    </ul>
                    <ul class="оffer__list_item">
                        <li class="оffer__list_item-numder">3</li>
                        <li class="оffer__list_item-description">Подберем натуральные материалы, мебель и реализуем проект, освободив ваше время</li>
                    </ul>
                    <ul class="оffer__list_item">
                        <li class="оffer__list_item-numder">4</li>
                        <li class="оffer__list_item-description">Подберем натуральные материалы, мебель и реализуем проект, освободив ваше время</li>
                    </ul>
                </nav>
            </section>

            <section class="aboutus">
                <nav class="aboutus__info">
                    <h2 class="services__title оffer__title-change">Привет!</h2>
                    <ul class="оffer__list_item-description">
                        <li class="aboutus__info_text-helper">Имея профессиональное архитектурное образование (Московский архитектурный институт & Британская высшая школа дизайна), мы получили большой опыт работы в крупных международных компаниях и российских бюро, что позволило нам встать на собственный путь.</li>
                        <li class="aboutus__info_text-helper">Нас часто принимают за сестер, и это не просто так! Мы похожи. Это не только внешние сходства, но и связь с сумасшедшим влечением к своему ремеслу, единым видением общего и сохранением частного.</li>
                    </ul>
                </nav>
                <div class="aboutus__image-stack">
                    <div class="aboutus__image-stack_item aboutus__image-stack_item--top1">
                      <img class="aboutus__image-stack_img rellax ukiyo" data-rellax-speed="1" src="img/adoutas/1-center.jpg">
                    </div>
                    <div class="aboutus__image-stack_item aboutus__image-stack_item--top2">
                        <img class="aboutus__image-stack_img rellax ukiyo" data-rellax-speed="3" src="img/adoutas/2-ctnter.jpg">
                      </div>
                    <div class="aboutus__image-stack_item aboutus__image-stack_item--bottom1">
                      <img class="aboutus__image-stack_img rellax ukiyo" data-rellax-speed="2" src="img/adoutas/1-bg.jpg">
                    </div>
                    <div class="aboutus__image-stack_item aboutus__image-stack_item--bottom2">
                        <img class="aboutus__image-stack_img rellax ukiyo" data-rellax-speed="-1" src="img/adoutas/2-bg.jpg">
                    </div>
                    <div class="aboutus__image-stack_item aboutus__image-stack_item--bottom3">
                        <img class="aboutus__image-stack_img rellax ukiyo" data-rellax-speed="-2" src="img/adoutas/3-bg.jpg">
                    </div>
                </div>
            </section>

            <section class="FQ"> <!--Frequent Questions-->
                <h2 class="services__title">Часто задаваемые вопросы</h2>
                <div class="FQ__general">
                    <div class="FQ__general_list">
                        <h3 class="FQ__general_list-title">Денежные вопросы</h3>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button" type="submit">
                                <li class="FQ__general_list-numder">1</li>
                                <li class="FQ__general_list-text">Сколько стоит дизайн-проект?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Стоимость дизайн-проекта зависит от площади объекта, его месторасположения и выбранных услуг итерьера, который описывает состав выполняемых работ.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button" type="submit">
                                <li class="FQ__general_list-numder">2</li>
                                <li class="FQ__general_list-text">Стоимость зависит от сложности проекта?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Нет, стоимость зависит только от проектируемой площади помещения и его месторасположения. Если у Вас имеются какие-то особенные требования к проекту, которые, как Вам кажется, могут повлиять на его стоимость – лучше связаться с нами и обсудить их.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">3</li>
                                <li class="FQ__general_list-text">Может ли измениться стоимость в процессе разработки дизайна?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Стоимость проекта может измениться только в одном случае – при изменении проектируемой площади, указанной в договоре по отношению в реальной площади помещений, полученной после обмеров дизайнером. В случае уменьшения или увеличения проектируемой площади производится перерасчет пропорционально измененной площади.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">4</li>
                                <li class="FQ__general_list-text">Как мне понять сколько и каких материалов необходимо закупить?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Вам не нужно ничего закупать, мы позаботимся об этом, чтобы с экономить ваше время.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">5</li>
                                <li class="FQ__general_list-text">Какой порядок оплаты?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Очень разный, но чаще всего 30\50\20</p>
                        </div>
                    </div>
                    <div class="FQ__vl"></div>
                    <div class="FQ__general_list">
                        <h3 class="FQ__general_list-title">Творческие вопросы</h3>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">1</li>
                                <li class="FQ__general_list-text">Вы работаете в других городах?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Да работаем. В проектировании мы не ограничены географией.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button" type="submit">
                                <li class="FQ__general_list-numder">2</li>
                                <li class="FQ__general_list-text">Вы делаете индивидуальные проекты или используете шаблонные решения?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Мы разрабатываем только индивидуальные проекты.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">2</li>
                                <li class="FQ__general_list-text">Вы можете порекомендовать строительную бригаду?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Да, у нас есть партнеры, за которых мы готовы поручиться и проконтролировать ход проекта совершенно бесплатно.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">4</li>
                                <li class="FQ__general_list-text">Строители смогут реализовать предложенные вами решения?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Да, безусловно. Специально для этого мы предоставляем разрезы (узлы и сечения) по всем поверхностям.</p>
                        </div>
                        <div class="FQ__general_list-one">
                            <button class="FQ__general_list-button">
                                <li class="FQ__general_list-numder">5</li>
                                <li class="FQ__general_list-text">Если у меня свои строители им будет достаточно вашего проекта для реализации?</li>
                            </button>
                            <p class="FQ__general_list-text FQ__general_list-answer">Нашего проекта более чем достаточно для проведения ремонта. Профессиональные строители, которые умеют читать чертежи без труда прочтут документацию. Менее 1% клиентов возвращаются с вопросами по проекту в момент проведения строительных работ.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="collaboration splide"> <!-- slider с кем сотрудничали -->
                <div class="splide__track collaboration__list">
                    <ul class="splide__list">
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/1.png">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/2.jpg">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/3.png">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/4.png">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/5.jpg">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/6.jpg">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/7.jpg">
                        </li>
                        <li class="splide__slide collaboration__image">
                            <img class="collaboration__img" src="img/collaboration/8.jpg">
                        </li>
                    </ul>
              </div>
            </section>
        </main>
        <?php
            include 'php/footer.php';
        ?>
    </body>
    <script src="js/aboutus-rellax.js"></script>
    <script src="js/FQ.js"></script>
    <script src="js/collaboration.js"></script>
    <!-- <script src="js/ukiyo.min.js"></script> -->
</html>