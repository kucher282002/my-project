<?php
    if(checkAuth()):
        $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
        $pr = array(
        "token" => $_SESSION["token"],
        "session" => session_id()
        );
        $row = db::getRow($qr, $pr);
    if ($row->id_group == 1) {
        $group = "Администратор";
    } elseif ($row->id_group == 2) {
        $group = "Модератор";
    } else {
        $group = "Ползователь";
    }
?>
    <form class="kontact" action="php/out.php" method="post">
        <ul class="topmenu text">
            <li>
                <a href="" class="down name3">
                    <p class="menu__link"><?=$row->user_name?></p>
                </a>
                <ul class="submenu text">
                    <li class='support-text-1'><?=$group?></li>
                    <?php
                        if(checkAuth()):
                            $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                            $pr = array(
                                "token" => $_SESSION["token"],
                                "session" => session_id()
                            );
                            $row = db::getRow($qr, $pr);
                        if ($row->id_group == 1):
                    ?>
                    <li class=""><a href="activs.php" class="menuButton">Админка</a></li>
                    <?php
                        endif;
                    endif;
                    ?>
                    <li class=""><a href="profile.php" class="menuButton">Профль</a></li>
                    <li class=""><button class="menuButton" type="submit">Выйти</button></li>
                </ul>
            </li>
        </ul>
    </form>
<?php else: ?>
    <div class="open__unification">
        <button class="menu__button menu__link" id="authButton">Войти</button>
    </div>
<?php endif;?>