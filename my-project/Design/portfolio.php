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
        <link rel="stylesheet" href="css/portfolio.css">
        <link rel="stylesheet" href="css/portfolio-adaptation.css">
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header.php';
        ?>
        <main>
            <section class="portfolio">
                <div class="portfolio__description">
                    <h2 class="portfolio__description_title">Портфолио</h2>
                    <p class="portfolio__description_text">Здесь представлены некоторые из осуществленных нами проектов</p>
                </div>
                <div class="portfolio__AllProjects">
                    <?php
                        $qr = "SELECT * FROM portfolio ORDER BY id_portfolio DESC";
                        $pr = array();
                        $rs = db::getRowCount($qr, $pr);
                        while($portfolio = $rs->fetch(PDO::FETCH_OBJ)):
                            $qr = "SELECT * FROM images WHERE images.id_portfolio = '$portfolio->id_portfolio'";
                            $pr = array();
                            $images = db::getRow($qr, $pr);
                    ?>
                    <div class="portfolio__AllProjects_projects">
                        <a class="portfolio__AllProjects_projects-img" href="template-<?=$portfolio->template?>.php?id=<?=$portfolio->id_portfolio?>"><img class="portfolio__AllProjects_projects-img " src="<?=$images->image_way?>"></a>
                        <div class="portfolio__AllProjects_projects-info">
                            <a href="template-<?=$portfolio->template?>.php?id=<?=$portfolio->id_portfolio?>"><h3 class="portfolio__AllProjects_projects-text"><?=$portfolio->name_portfolio?></h3></a>
                            <a href="template-<?=$portfolio->template?>.php?id=<?=$portfolio->id_portfolio?>"><h3 class="portfolio__AllProjects_projects-text"><?=$portfolio->address?></h3></a>
                            <?php
                                if(checkAuth()):
                                    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                                    $pr = array(
                                        "token" => $_SESSION["token"],
                                        "session" => session_id()
                                    );
                                    $row = db::getRow($qr, $pr);
                                    if($row->id_group == 1):
                            ?>
                            <a href="php/deletePortfolio.php?id=<?=$portfolio->id_portfolio?>"><h3 class="portfolio__AllProjects_projects-text">Удалить</h3></a>
                            <?php endif; endif; ?>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/2.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/3.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/4.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/5.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/6.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/7.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/8.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/9.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/10.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/11.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                    <div class="portfolio__AllProjects_projects">
                        <img class="portfolio__AllProjects_projects-img " src="img/portfolio/12.jpg">
                        <div class="portfolio__AllProjects_projects-info">
                            <h3 class="portfolio__AllProjects_projects-text">Музей Ю.А. Гагарина</h3>
                            <h3 class="portfolio__AllProjects_projects-text">Москва</h3>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include 'php/footer.php';
        ?>
    </body>
    <script src="js/aboutus-rellax.js"></script>
    <script src="js/ukiyo.min.js"></script>
</html>