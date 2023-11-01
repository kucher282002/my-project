
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/unification.css">
</head>
<body>
<header class="header">
    <div class="heder__container">
        <nav class="header__logo">
            <a class="logo__href" href="index.php">
                <img class="logo__img" src="img/logo.svg">
                <p class="logo__text_size_n">RS</p>
            </a>
        </nav>
        <div class="header__menu menu">
            <div class="menu__icon">
                <span></span>
            </div>
            <nav class="menu__body">
                <ul class="menu__list">
                    <li><a href="activs.php" class="menu__link">Заказы</a></li>
                    <li><a href="сreating-portfolio.php" class="menu__link">Добавить портфолио</a></li>
                    <?php include 'checkAuth.php';?>
                </ul>
            <nav>
        </div>
    </div>
</header>


    <div class="unification"> <!--чёрный фон-->
        <div class="unification__close"> <!--закрытие по заднему фону-->
        </div>
        <div class="unification__position-login">
            <form class="unification__form" action="php/auth.php" method="POST" name="auth"> <!--форма авторизация-->
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
                            <img src="img/google.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="img/vk.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="img/twitter.png">
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
            <form class="unification__form" action="php/reg.php" method="POST" name="reg"> <!--форма авторизация-->
                <nav class="unification__form_block">
                    <h2 class="unification__form_block-title">Регистрация</h2><!--заголовок-->
                    <ul class="unification__form_block-info"> <!--input-->
                        <li>
                            <input  class="unification__form_block-input" name="login" placeholder="Введите ваше имя">
                        </li>
                        <li>
                            <input type="email" class="unification__form_block-input" name="email" placeholder="Введите email">
                        </li>
                        <li>
                            <input type="password" class="unification__form_block-input" name="password" placeholder="Введите пароль">
                        </li>
                        <li>
                            <input  class="unification__form_block-input" name="confirm" placeholder="Подтвердите пароль">
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
                            <img src="img/google.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="img/vk.png">
                        </a>
                        <a href="#" class="unification__social_icons-widht">
                            <img src="img/twitter.png">
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
<!-- <script src="js/main.js"></script> -->
</html> 

