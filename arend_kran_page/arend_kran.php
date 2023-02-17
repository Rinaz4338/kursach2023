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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 5");
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
                <h1 style="margin-top: 100px;">Автокраны</h1>
                <p class="opis">Автокран — кран стрелового типа, который может быть
                     снабжён башенно-стреловым оборудованием и перемещается без груза, 
                     не требуя специальных путей и устойчивость которого обеспечивается
                      за счет силы тяжести.</p>
                <h1>Виды работ автомобильного крана</h1>
                <p class="opis">Очень часто используется в работе коммунальных
                     организаций, в деятельности строительных компаний, работе ремонтных
                      служб. Подъем грузов: вертикальное и горизонтальное перемещение
                       тяжелых материалов, предметов и техники, операции по монтажу
                        зданий и выполнение других различных видов работ — это то,
                         для чего нужен автокран. Главные операции, которые можно
                          выполнять:</p>
                <ul class="opis">
                    <li>строительство зданий, мостов, объектов, домов, в том числе перемещение в горизонтальном и вертикальном положении стройматериалов, техники, оборудования, механизмов;</li>
                    <li>поднятие и перемещение блочных конструкций;</li>
                    <li>перемещение тяжелых грузов;</li>
                    <li>перемещение в пространстве тяжелых и габаритных металлоконструкций, иногда автомобилей;</li>
                    <li>в дорожных работах: укладка автомобильных дорог;</li>
                    <li>строительство мостов и пр.</li>
                </ul>
                <h1>ЧТО ЖЕ КОНКРЕТНО ДЕЛАЕТ АВТОКРАН?</h1>
                <p class="opis">На самом деле, он может выполнять самую разнообразную
                     работу. Например, поднятие грузов. Чаще всего его используют именно
                      для этих целей. Это отличная техника для того, чтобы быстро
                       переместить груз из одного места в другое. На любой строительной
                        площадке вы можете встретить автокран. Без него в строительной
                         области никак не обойтись. Её применяют даже в тех случаях,
                          когда идёт банальная закладка фундамента под здание.
                          <br>
                Автокраны используются в лесной области. Это лучшая техника для того,
                 чтобы перемешать длинные срубленные деревья. Поднимать их с земли
                  и погружать в автомобили. Модели применяют во время проведения
                   ремонта на электромагистралях. В том числе, автокран можно
                    использовать даже во время чрезвычайных происшествий, когда надо
                     эвакуировать людей из опасных мест.
                     <br>
                Автокран – это универсальная техника для многих областей.
                 Именно поэтому её используют каждый день в самых разных частях города.
                  Смотрите автокраны на нашем сайте и заказывайте их для качественной
                   работы!</p>
                
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Высота подъема: <br> <?php echo $technic['kran_visotapodjema']; ?></p>
                        <p class="text_row">Грузоподъемность: <br> <?php echo $technic['kran_gruzopodemnost']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>