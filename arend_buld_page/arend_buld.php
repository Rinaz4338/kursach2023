<?php
session_start();
require_once("../bd/db_connect.php");
if (!isset($_SESSION['logged_user']))
{
    header('Location: ../aut_page/auth.php');
    exit;
}
else
{
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 3");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/style.css" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="_wrapper">
            <div class="logo">
                <a href="../index.php">
                    <img src="img/logo.png" height="80px"  />
                </a>
            </div>
            <div>
                <form action="../reg-page/reg.php">
                    <button style="width: auto; height: 48px; font-size: 14px;" type="submit" id="reg-btn" class="btn">Регистрация</button>
                </form>
                <form action="../aut_page/auth.php">
                    <button style="width: auto; height: 48px; font-size: 14px;" type="submit" id="log-btn" class="btn">Авторизация</button>
                </form>   
                <div class="social-links">
                    <a href="#">
                        <img src="img/vk.png" height="30px" />
                    </a>
                    <a href="https://t.me/PitStopServisesBot">
                        <img src="img/telegram.png" height="30px" />
                    </a>
                    <a href="https://wa.me/qr/OGO3NNZSZJ6OM1">
                        <img src="img/whatsapp.png" height="30px" />
                    </a>
                </div>
                <div class="tel">
                    <a href="tel:+79600319417">+7 960 031 94 17</a>
                </div>
                <button type="button" id="contact-btn" class="btn">Заказать звонок</button>
            </div>
        </div>
    </header>
    <main>
        <article class="box">
            <div>
                <h1 style="margin-top: 100px;">Бульдозеры</h1>
                <p class="opis">самоходная землеройная машина, представляющая собой 
                    гусеничный или колёсный трактор, тягач или другое шасси с навесным 
                    рабочим органом — криволинейным в сечении отвалом, расположенным вне 
                    базы ходовой части машины.</p>
                <h1>Для каких работ нужен бульдозер?</h1>
                <p class="opis">С помощью бульдозера проводятся работы по 
                    перемещению и копанию грунтовых материалов.</p>
                <h1>Где используется?</h1>
                <p class="opis">Бульдозер относится к виду строительной спецтехники, 
                    предназначенной для работы в местах повышенной неровности, 
                    при большом угле наклона. Благодаря гусеницам, которые используются 
                    в качестве шасси, машина способна передвигаться без труда при 
                    строительстве карьеров, дорожных поверхностей, а так же при 
                    формировании ландшафтного покрытия.</p>
                <h1>Классификация</h1>
                <p class="opis">Этот вид техники делится на три класса 
                    (легкий, средний и тяжелый). Классификация зависит от 
                    массы машины и мощности двигателя. Кабина для оператора 
                    сконструирована таким образом, что позволяет проводить 
                    работы в разнообразных погодных условиях - эта функция относится, 
                    как правило, к современным машинам среднего и тяжелого класса.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Ширина ковша: <br> <?php echo $technic['buld_kovshwIdth']; ?></p>
                        <p class="text_row">Высота ковша: <br> <?php echo $technic['buld_kovshheight']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>