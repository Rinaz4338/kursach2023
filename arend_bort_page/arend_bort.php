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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 8");
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
                <h1 style="margin-top: 100px;">Боротовые длинномеры</h1>
                <p class="opis">Бортовой длинномер – грузовой автомобиль,
                     который состоит из тягача и длинного прицепа с бортами.</p>
                <h1>Аренда</h1>
                <p class="opis">Аренда бортового длинномера имеет массу преимуществ
                     перед другими видами грузовой спецтехники. Как уже было сказано,
                      это - удобство и простота погрузочно-разгрузочных работ,
                       а так же:</p>
                <ul class="opis">
                    <li>возможность перевозки большого количества грузов одновременно благодаря вместительности кузова; </li>
                    <li>экономичность финансовых и временных затрат при перевозке крупногабаритных грузов с наибольшей массой на дальние расстояния; </li>
                    <li>высокое качество и скорость транспортировки грузов весом до 25 тонн;</li>
                    <li>надежность в сохранности грузов благодаря наличию прочной и устойчивой армированной платформе автомобиля. К тому же конструкция автомобиля предусматривает размещение натяжного тента для защиты груза от воздействия ветра, снега или дождя.</li>
                </ul>
                <h1>Универсальность</h1>
                <p class="opis">Аренда длинномера/шаланды подходит для перевозки:
                     различной длины металлических труб, металлопрокатного оборудования,
                      токарных и слесарных станков, железобетонных плит, башенных кранов,
                       крупного промышленного оборудования. Поэтому пользуется
                        популярностью у строительных и транспортных компаний, а так же
                         предприятий, занимающихся газовой и нефтяной промышленностью.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Размер кузова: <br> <?php echo $technic['dlinnomer_razmerkuzova']; ?></p>
                        <p class="text_row">Грузоподъемность: <br> <?php echo $technic['dlinnomer_gruzopodemnost']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>