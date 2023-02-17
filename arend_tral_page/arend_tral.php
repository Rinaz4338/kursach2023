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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 9");
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
                <h1 style="margin-top: 100px;">Тралы</h1>
                <p class="opis">Трал - это низкорамный полуприцеп, имеющий от трёх до
                     семи осей. Тралы специально конструируют для перевозки негабаритных
                      грузов, стремясь минимизировать погрузочную высоту. Тралы могут
                       быть снабжены аппарелями для погрузки самоходной негабаритной
                        техники. Бывают тралы универсальные и специализированные, для
                         перевозки какого-то определённого класса грузов. Некоторые
                          модели снабжаются уширителями. Грузоподъёмность
                           специализированных моделей может превышать 140 тонн.</p>
                <h1>«SPECRENT»</h1>
                <p class="opis">Строительство, земляные и инженерные работы,
                     сельское хозяйство, деятельность ЖКХ - во всех этих сферах
                      задействовано большое количество специализированной техники.
                       Экскаваторы, краны, подъёмники, погрузчики, бульдозеры выполняют
                        свои задачи непосредственно на объектах. Однако до этого
                         спецтехнику на объект нужно доставить. С этой целью используются
                          низкорамные тралы для перевозки техники - безбортовые
                           платформы-полуприцепы к седельным тягачам.</p>
                <h1>Аренда трала</h1>
                <p class="opis">Аренда трала в Казани решит задачи связанные с доставкой
                     спецтехники или крупногабаритных грузов на объект. С помощью
                      вместительных полуприцепов можно перевозить строительные материалы
                       и оборудование. Заказать трал можно для того, чтобы переместить
                        с одной площадки на другую гусеничный экскаватор, бульдозер,
                         грунтовый каток – всем этим средствам запрещен проезд по
                          городским дорогам.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Размер платформы: <br> <?php echo $technic['tral_razmerplatformi']; ?></p>
                        <p class="text_row">Грузоподъемность: <br> <?php echo $technic['tral_gruzopodemnost']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>