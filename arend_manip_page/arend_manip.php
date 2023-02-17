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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 6");
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
                <h1 style="margin-top: 100px;">Манипуляторы</h1>
                <p class="opis">Это автомобиль с платформой, оборудованный краном. 
                    В отличие от обычного автокрана, он предназначен не только для 
                    погрузочно-разгрузочных работ, но и для транспортировки грузов.</p>
                <h1>Достоинства крана-манипулятора:</h1>
                <ul class="opis">
                    <li>точность передвижения и размещения груза;</li>
                    <li>можно использовать как для транспортировки, так и для погрузки-разгрузки товаров (изделий);</li>
                    <li>компактность позволяет применять технику в ограниченном пространстве, что особенно актуально на строительных площадках;</li>
                    <li>допустимость перемещения между рабочими объектами;</li>
                    <li>простота и надежность в эксплуатации.</li>
                </ul>
                <h1>«SPECRENT»</h1>
                <p class="opis">Краны-манипуляторы используются для проведения
                     погрузочно-разгрузочных работ, а также транспортировки грузов.
                      Выбор техники определяется габаритами, грузоподъемностью и прочими
                       параметрами. «SPECRENT» предлагает услуги по аренде
                        манипулятора на выгодных условиях и по специальной цене.
                         Мы используем надежную и исправную технику.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Грузоподъемность борта: <br> <?php echo $technic['manipulator_gruzopodemnostborta']; ?></p>
                        <p class="text_row">Грузоподъемность стрелы: <br> <?php echo $technic['manipulator_gruzopodemnoststrel']; ?></p>
                        <p class="text_row">Вылет стрелы: <br> <?php echo $technic['manipulator_viletstrel']; ?></p>
                        <p class="text_row">Размеры борта: <br> <?php echo $technic['manipulator_razmerborta']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>