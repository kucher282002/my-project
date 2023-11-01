<?php
    require ('php/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/unification.css">
</head>
<body>
    <header class="header">
        <div class="header__block">
            <p class="header__block_logo">EXOLAND</p>
            <?php include 'php/checkAuth.php';?>
        </div>
        <ul class="header__menu">
            <li class="header__menu_paragraph">
                <a href="index.php" class="header__menu_paragraph_href">О нас</a>
            </li>
            <li class="header__menu_paragraph">
                <a href="catalog.php" class="header__menu_paragraph_href">Каталог</a>
            </li>
            <li class="header__menu_paragraph">
                <a href="animal.php" class="header__menu_paragraph_href">Всё о животных</a>
            </li>
            <li class="header__menu_paragraph">
                <a href="сontact.php" class="header__menu_paragraph_href">Контакты</a>
            </li>
            <?php
                if (checkAuth()){
            ?>
            <li class="header__menu_paragraph">
                <a href="basket.php" class="header__menu_paragraph_href">Корзина</a>
            </li>
            <?php
                }
            ?>
        </ul>
    </header>

    <div class="unification"> <!--чёрный фон-->
        <div class="unification__close"> <!--закрытие по заднему фону-->
        </div>
        <div class="unification__position-login">
            <form class="unification__form xhr" action="php/auth.php" method="POST" name="auth"> <!--форма авторизация-->
                <nav class="unification__form_block">
                    <h2 class="unification__form_block-title">Авторизация</h2><!--заголовок-->
                    <ul class="unification__form_block-info"> <!--input-->
                        <li>
                            <input type="email" class="unification__form_block-input" name="email" placeholder="Введите email">
                        </li>
                        <li>
                            <input type="password" class="unification__form_block-input" name="password" placeholder="Введите пароль">
                            <a href="#">
                                <p class="unification__form_block-help">Забыли пароль?</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="unification__login">
                    <button class="unification__login_button">Войти</button>
                </div>
                <div class="unification__social"> <!--Соцсети-->
                    <p class="unification__social_text">Или войдите, используя:</p>
                    <div class="unification__social_icons">
                        <a href="#" class="unification__social_icons-widht">
                            <img src="images/icon/google.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="images/icon/vk2.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="images/icon/twitter.png">
                        </a>
                    </div>
                </div>
                <ul class="unification__account">
                    <li class="unification__account_question">Нет аккаунта?</li>
                    <a href="#">
                        <li class="unification__account_response-register">Создайте его</li>
                    </a>
                </ul>
            </form>
            
        </div>
        <div class="unification__position-register">
            <form class="unification__form xhr" action="php/reg.php" method="POST" name="reg"> <!--форма авторизация-->
                <nav class="unification__form_block">
                    <h2 class="unification__form_block-title">Регистрация</h2><!--заголовок-->
                    <ul class="unification__form_block-info"> <!--input-->
                        <li>
                            <input  class="unification__form_block-input" name="name" placeholder="Введите ваше имя">
                        </li>
                        <li>
                            <input type="email" class="unification__form_block-input" name="email" placeholder="Введите email">
                        </li>
                        <li>
                            <input type="password" class="unification__form_block-input" name="password" placeholder="Введите пароль">
                        </li>
                        <li>
                            <input type="password" class="unification__form_block-input" name="confirm" placeholder="Подтвердите пароль">
                        </li>
                    </ul>
                </nav>
                <div class="unification__login">
                    <button class="unification__login_button">Войти</button>
                </div>
                <div class="unification__social"> <!--Соцсети-->
                    <p class="unification__social_text">Или войдите, используя:</p>
                    <div class="unification__social_icons">
                        <a href="#" class="unification__social_icons-widht">
                            <img src="images/icon/google.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="images/icon/vk2.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="images/icon/twitter.png">
                        </a>
                    </div>
                </div>
                <ul class="unification__account">
                    <li class="unification__account_question">Есть аккаунт?</li>
                    <a href="#">
                        <li class="unification__account_response-login">Войти в него</li>
                    </a>
                </ul>
            </form>
            
        </div>
        <div class="unification__position-restore">
            <form class="unification__form" action="#" method="POST"> <!--форма авторизация-->
                <input type="hidden" name="#" value="#">
                <nav class="unification__form_block">
                    <h2 class="unification__form_block-title">Восстановление пароля</h2><!--заголовок-->
                    <ul class="unification__form_block-info"> <!--input-->
                        <li>
                            <input  class="unification__form_block-input" placeholder="Введите email">
                        </li>
                    </ul>
                </nav>
                <div class="unification__login">
                    <button class="unification__login_button">Восстановить</button>
                </div>
                <ul class="unification__account">
                    <li class="unification__account_question">Есть аккаунт?</li>
                    <a href="#">
                        <li class="unification__account_response-restore">Назад</li>
                    </a>
                </ul>
            </form>
        </div>
    </div>
</body>
<script src="js/unification.js"></script>
<script src="js/main.js"></script>
</html>