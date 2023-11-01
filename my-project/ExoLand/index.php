<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLand</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">
    <script src="splide/dist/js/splide.min.js"></script> <!--библиоетка splide-->
</head>
<body>
    <?php include 'header.php';?>
    <main>
        <section class="welcome">
            <div class="welcome__block">
                <h1 class="welcome__block_title">Рептилии тоже наши друзья, как и любые другие животные</h1>
                <div class="welcome__block_button-block">
                    <a href="#Katalog" class="button-block_button"><p class="button-block_button_text">Найти друга</p></a>
                    <div class="button-block_line"></div>
                    <p class="button-block_slogan">Или пусть он найдет тебя</p>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="info__block1">
                <h1 class="info__name">Кто мы и почему именно мы?</h1>
                <p class="info__text">
                    <b>ExoLand</b> — Зоомагазин экзотических животных и товаров для их содержания.
                    Самый большой выбор животных, террариумов, оборудования, декора, кормов. 
                    Мы предоставляем полный спектр услуг, включая оформление террариумов, обслуживание, онлайн-консультирование и пр. 
                    В нашем магазине вы всегда сможете собрать полный комплект для содержания питомца. 
                    А если вы новичок, наши сотрудники с радостью помогут выбрать первое животное и обустроить идеальный террариум.
                </p>
            </div>
            <div class="info__block2">
                <div class="info__block-left">
                    <h2 class="info__name">Что у нас можно найти?</h2>
                    <p class="info__text">
                        Вы можете здесь познакомиться со всеми видами змей, ящериц, пауков и различных других животных, которых можно содержать дома, хоть многие даже и не задумываются об этом. 
                        Мы предоставим вам самую полную информацию об ареале обитания, питании, любимых повадках, лакомствах, уходе, содержании и различных других важных моментах, которые нужно знать для содержания этих прекрасных существ.
                    </p>
                </div>
                <div class="info__block-line"></div>
                <div class="info__block-right">
                    <ul class="info__spisok">
                        <li class="info__point">
                            <img class="info__point-image" src="images/icon/snake.png">
                            <p class="info__point-text">Змеи обитают на всех континентах, кроме Антарктиды и нескольких крупных островов, таких как Ирландия и Новая Зеландия.</p>
                        </li>
                        <li class="info__point">
                            <img class="info__point-image" src="images/icon/lizard.png">
                            <p class="info__point-text">Ящерицы, в отличие от змей, имеют подвижные, разделенные веки. Тело ящерицы упругое, вытянутое, оканчивающееся длинным хвостом. Лапы ящерицы пропорциональные, когтистые, средней длины.</p>
                        </li>
                        <li class="info__point">
                            <img class="info__point-image" src="images/icon/spider.png">
                            <p class="info__point-text">Паук (Araneae) относится к типу членистоногие, классу паукообразные, отряду пауки. Их первые представители появились на планете приблизительно 400 миллионов лет назад.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    <a name="Katalog"></a>
        <section class="animal">
            <h1 class="animal__name">Выбери свое животное</h1>
            <div class="animal__block">
                <?php
                    $qr = "SELECT * FROM image_index";
                    $pr = array();
                    $rs = db::getRowCount($qr, $pr);
                    while($images = $rs->fetch(PDO::FETCH_OBJ)):
                        if ($images->link_image == 0):
                ?>
                <a href="catalog.php" class="animal__block_link">
                    <div class="animal__block_link-element">
                        <img class="animal__block_link-element-img" src="<?=$images->location_image.$images->name_image?>" alt="<?=$images->text_image?>">
                        <div class="animal__block_link-element-info">
                            <h1 class="animal__block_link-element-name"><?=$images->title_image?></h1>
                            <p class="animal__block_link-element-text"><?=$images->subtitle_image?></p>
                        </div>
                    </div>
                </a>
                <?php
                    else: 
                ?>
                 <a href="chapter.php?id=<?=$images->link_image?>" class="animal__block_link">
                    <div class="animal__block_link-element">
                        <img class="animal__block_link-element-img" src="<?=$images->location_image.$images->name_image?>" alt="<?=$images->text_image?>">
                        <div class="animal__block_link-element-info">
                            <h1 class="animal__block_link-element-name"><?=$images->title_image?></h1>
                            <p class="animal__block_link-element-text"><?=$images->subtitle_image?></p>
                        </div>
                    </div>
                </a>
                <?php endif; endwhile; ?>
            </div>
        </section>
        <section class="news splide"> <!-- slider с кем сотрудничали -->
        <h1 class="news__title">Новости</h1>
            <div class="splide__track news__list">
                <div class="splide__list news__div">
                    <?php
                        $qr = "SELECT * FROM news ORDER BY news_date DESC LIMIT 9";
                        $pr = array();
                        $rs = db::getRowCount($qr, $pr);
                        while($images = $rs->fetch(PDO::FETCH_OBJ)):
                    ?>
                    <div class="news_link splide__slide">
                        <a href="" class="news_link-element">
                            <img class="news_link-element-img" src="<?=$images->news_image_location.$images->news_image_name?>" alt="<?=$images->news_image_name?>">
                            <div class="news_link-element-info">
                                <h1 class="news_link-element-name"><?=$images->news_title?></h1>
                                <p class="news_link-element-text"><?=$images->news_text?></p>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
<script src="js/collaboration.js"></script>
</html>