<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLand</title>
    <link rel="stylesheet" href="css/сontact.css">
</head>
<body>
    <?php include 'header.php';?>
    <main>
        <section class="contact">
            <nav class="contact__list">
                <h3 class="contact__title">Контактные телефоны:</h3>
                <ul class="contact__main-text">
                    <li><samp>+7(925)000-00-00</samp> - телефон тех. поддержки</li>
                    <li><samp>+7(925)000-00-00</samp> - номер центрального офиса</li>
                </ul>
            </nav>
            <nav class="contact__list">
                <h3 class="contact__title">Наши адреса:</h3>
                <ul class="list__addres contact__main-text">
                    <li class="list__addres_image">
                        <img class="list__addres_icon" src="images/icon/map.png" alt="">
                        <p>Москва, Волгоградский пр-т., 15</p>
                    </li>
                    <li class="list__addres_image">
                        <img class="list__addres_icon" src="images/icon/mail.png" alt="">
                        <p>exoland@gmail.com</p>
                    </li>
                </ul>
            </nav>
            <nav class="contact__social">
                <h3 class="contact__title">Наши соц. сети</h3>
                <ul class="social__image contact__main-text">
                    <li class="social__image_li"><img class="social__image_icon" src="images/icon/telegram.png" alt=""></li>
                    <li class="social__image_li"><img class="social__image_icon" src="images/icon/vk.png" alt=""></li>
                    <li class="social__image_li"><img class="social__image_icon" src="images/icon/youtube.png" alt=""></li>
                </ul>
            </nav>
        </section>
        <section class="map">
            <p class="contact__main-text map__text">На карте можно посмотреть как до нас дойти от ближайшего метро</p>
            <iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5297.484718044528!2d35.0435772!3d48.4038907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfb3f783e26c9%3A0x75234ec2beac21eb!2z0JzQtdCx0LXQu9GMINCT0YPQtCDigJQg0LzQsNCz0LDQt9C40L0g0LzQtdCx0LXQu9C4INCyINCU0L3QtdC_0YDQtQ!5e0!3m2!1sru!2sru!4v1653215982679!5m2!1sru!2sru" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
<script src="js/collaboration.js"></script>
</html>