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
    $technica = $mysql->query("SELECT * FROM `technique` WHERE `type_id` = 1");
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
                <h1 style="margin-top: 100px;">Экскаваторы</h1>
                <p class="opis">Экскаваторы - машины, наиболее часто применяемые для земляных работ, оборудованные ковшом. Основной функцией которых
                является рытье и разработка котлованов, траншей, карьерные работы.</p>
                <h1>Стабильность на поверхности</h1>
                <p class="opis">За счёт большого веса шасси, низкого центра тяжести, а также мощных грунтозацепов стабилизация гусеничных машин
                    на поверхности лучше, чем у колёсных аналогов. Однако если оснастить экскаватор на колёсах дополнительной опорой,
                    такой как аутригеры, то получится не менее надёжный рабочий процесс.</p>
                <h1>Универсальность</h1>
                <p class="opis">В настоящее время техника доступна с различным навесным оборудованием, будь то: гидромолот, ножницы, монтажная
                    люлька и прочее, что несомненно делает её наиболее востребованной в строительных работах. При этом как колёсные,
                    так и гусеничные экскаваторы работают с любыми видами навесного оборудования, однако последние нельзя
                    использовать на асфальтовом покрытии, так как из-за особенностей конструкции они могут нанести ему значительный
                    ущерб.
                    За счёт того, что ассортимент насадок довольно широк, а колесные модели техники обладают большой маневренностьк
                    то их нередко используют не только в демонтаже и копании, но и в очистных работах, аккуратном срезании асфальта, а
                    также в спиле леса и корчевании пней.
                    Но и у гусеничных собратьев есть свои достоинства, например, узкий и длинный след, что влечёт за собой увеличение
                    производительности работы.</p>
                <h1>Управляемость и скорость</h1>
                <p class="opis">Так как гусеничная техника обладает небольшой скоростью (в среднем от пяти до пятнадцати километров в час), то
                    управляться с ней в плане передвижения довольно просто, но порой возникает ситуация когда нужна скорость, тогда на
                    помощь приходит колесный экскаватор, который может развивать скорость до тридцати километров в час, что довольнс
                    внушительный показатель для строительной техники. К тому же, в то время как гусеничный экскаватор нужно
                    перемещать с помощью низкорамного трала, колесный может перемещаться с места на место по дорогам общего
                    пользования.
                    Хотя на территории нашей страны востребованы оба вида данной спецтехники, взяв во внимания все вышеописанные
                    аспскты можно сделать вывод, что колесный экскаватор более универсальный нежели его собрат, однако и утого, и у
                    другого есть свои плюсы.</p>
            </div>
            <div class="back-img"></div>
        </article>
        <div class="alltech" style = "padding-top: 10px;">
            <?php while ($technic = $technica->fetch_assoc()) { ?>
                <div class="jr_tech_grid">
                    <div class="techcard">
                        <p class="text_start_row"><br><img class="img" src=<?php echo $technic['photo']; ?> alt=""> </p>
                        <p class="text_row"><br> <?php echo $technic['tech_name']; ?></p>
                        <p class="text_row">Глубина копания: <br> <?php echo $technic['exc_glubinakop']; ?></p>
                        <p class="text_row">Объем ковша: <br> <?php echo $technic['exc_objemkovsha']; ?></p>
                        <p class="text_row">Цена за смену:<br> <?php echo $technic['cost']; ?>руб</p>
                        <button style="width: auto; height: 48px; font-size: 14px;" class="btn">Заказать</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    </body>
</html>