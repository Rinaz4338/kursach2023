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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 2");
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
                <h1 style="margin-top: 100px;">Погрузчики</h1>
                <p class="opis">Фронтальный погрузчик — универсальная самоходная спецтехника, 
                    разновидность ковшового погрузчика, предназначенная для захвата, 
                    погрузки и транспортировки различных материалов, 
                    а также для выполнения карьерных и землеройных работ.</p>
                <h1>Преимущества</h1>
                <ul class="opis">
                    <li>функциональность</li>
                    <li>универсальность</li>
                    <li>большая грузоподъемность и эффективность</li>
                    <li>сравнительная малогабаритность</li>
                    <li>надежность</li>
                    <li>простота</li>
                    <li>маневренность</li>
                </ul>
                <h1>Универсальность</h1>
                <p class="opis">Техника этой категории хорошо показала себя в условиях, 
                    где ее маленький радиус разворотов позволяет работать на небольших 
                    территориях площадок. Для небольших предприятий приобретать, 
                    содержать, ремонтировать такую технику накладно. В то же время, 
                    требуется современное оборудование, способное быстро, 
                    эффективно работать. Поэтому аренда фронтального погрузчика, 
                    наиболее экономически оправданное решение.</p>
                <h1>Функциональность</h1>
                <p class="opis">В любое время года многофункциональная спецтехника 
                    используется на погрузке, разгрузке, земельных работах. 
                    Сельскохозяйственные, строительные, коммунальные, 
                    дорожные предприятия активно используют фронтальные погрузчики, 
                    аренду которых предлагает «SPECRENT». Для работы мы предоставляем 
                    универсальный вариант и спецтехнику, оснащенную навесными 
                    приспособлениями, необходимыми для конкретных задач.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Ширина ковша: <br> <?php echo $technic['pogr_kovshwidth']; ?></p>
                        <p class="text_row">Объем ковша: <br> <?php echo $technic['pogr_objemkovsha']; ?></p>
                        <p class="text_row">Грузоподъемность: <br> <?php echo $technic['pogr_gruzopodemnost']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>