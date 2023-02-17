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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 7");
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
                <h1 style="margin-top: 100px;">Самосвалы</h1>
                <p class="opis">Самосва́л — грузовой саморазгружающийся автомобиль,
                     прицеп или полуприцеп с кузовом, механически наклоняемым для
                      выгрузки груза или с принудительной разгрузкой. Также существуют
                       самосвалы, для выгрузки которых применяется наклон всего
                        автомобиля при помощи телескопических подъёмников.</p>
                <h1>«SPECRENT»</h1>
                <p class="opis">Предлагаем весь спектр услуг в рамках такого направления,
                     как аренда самосвала в Казани по специальной цене. Данный тип
                      техники необходим предприятиям, деятельность которых, связана
                       со строительством и автоперевозками, которым необходимо решать
                        вопросы транспортировки строительных сыпучих грузов и вывоза
                         мусора или снега. Несомненными преимуществами нашей компании
                          являются надежность и профессионализм водителей. С нашей
                           помощью Ваш бизнес будет процветать, тем более что вы
                            освободитесь от всех расходов, связанных с покупкой
                             и содержанием самосвалов.</p>
                <h1>Лучший вариант</h1>
                <p class="opis">Аренда самосвала 20 тонн – одна из наиболее
                     востребованных услуг в современном строительстве. Этот вид 
                     спецтехники предназначен для выполнения большого спектра работ. 
                     Самая простая из них – перевозка песка и других сыпучих материалов.
                      Осуществить её без самосвала будет достаточно проблематично.
                       Используя этот вид техники, вы можете сэкономить на оплате труда
                        грузчиков, а также значительно ускорить сам процесс разгрузки.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Объем кузова: <br> <?php echo $technic['samosval_objemkuzova']; ?></p>
                        <p class="text_row">Грузоподъемность: <br> <?php echo $technic['samosval_gruzopodemnost']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>