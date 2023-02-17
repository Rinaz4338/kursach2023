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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 4");
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
                <h1 style="margin-top: 100px;">Автовышка</h1>
                <p class="opis">Автовышка, также автогидроподъёмник (АГП)
                или самоходная площадка обслуживания — автомобиль 
                (реже — специальное шасси), оснащённый устройством для подъёма
                и перемещения рабочих с инструментом и материалами и используемый
                при монтаже и обслуживании линий электропередач, линий связи
                и контактных сетей, ремонте и обслуживании зданий и сооружений,
                обслуживании средств наружной рекламы, уходе за городскими
                зелёными насаждениями и т.п.</p>
                <h1>Аренда «SPECRENT»</h1>
                <p class="opis">Аренда автовышек - это удобный и недорогой способ
                     организации всевозможных высотных работ. «SPECRENT» предоставляет
                      данную услугу на территории Москвы и области. Ежедневно машины
                       компании с профессиональными водителями выполняют внушительные
                        объемы строительных, монтажных, спасательных и др. работ.</p>
                <h1>Где используется автовышка</h1>
                <ul class="opis">
                    <li>Ремонтно-строительные и монтажные работы на промышленных и жилых объектах, фасадах зданий;</li>
                    <li>Обслуживание, ремонт и монтаж линий электропередач, инженерных сетей и наружных устройств;</li>
                    <li>Обустройство улиц и домов, обрезка деревьев;</li>
                    <li>Пожарные, спасательные и подобные работы.</li>
                </ul>
                <h1>Как выбрать автовышку</h1>
                <p class="opis">Подобрать, среди огромного ассортимента, оптимально
                     подходящий автогидроподъемник, задача не из простых. 
                     Перед тем как взять подъёмное оборудование в аренду необходимо
                      обратить внимание на некоторые параметры:</p>
                <ul class="opis">
                    <li>Высота подъема рабочей платформы;</li>
                    <li>Грузоподъемность люльки на максимальной высоте;</li>
                    <li>Перемещение стрелы как по вертикали, так и по горизонтали;</li>
                    <li>Технические параметры - предельный вылет стрелы, рабочая максимальная высота, грузоподъемность;</li>
                    <li>Дополнительные опции (электроизоляция, розетка в корзине, сдвоенная кабина);</li>
                    <li>Используемый базовый транспорт (конструкция, параметры и особенности модели, тип, марка машины).</li>
                </ul>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Высота подъема: <br> <?php echo $technic['vishka_visotapodjema']; ?></p>
                        <p class="text_row">Грузоподъемность: <br> <?php echo $technic['vishka_gruzopodemnost']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>