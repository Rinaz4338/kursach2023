<?php
session_start();
if (isset($_POST['logout'])) {
    unset($_SESSION['logged_user']);
    header('Location: aut_page/auth.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="_wrapper">
            <div class="logo">
                <a href="../diplom/index.php">
                    <img src="img/logo.png" height="80px"  />
                </a>
            </div>
            <div>
                <form action="reg-page/reg.php">
                    <button style="width: auto; height: 48px; font-size: 14px;" type="submit" id="reg-btn" class="btn">Регистрация</button>
                </form>
                <form  action="aut_page/auth.php">
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
                <form method="POST">
                    <button style="width: auto; height: 48px; font-size: 14px;" type="submit" name="logout" id="contact-btn" class="btn">Выйти</button>
                </form>
            </div>
        </div>
    </header>
    
    <main>
        <article class="box">
            <div>
                <h1>«SPECRENT» - лучший выбор при аренда спецтехники</h1>
                <p class="opis">Наша компания располагает автопарком строительной техники самого разного функционального назначения,
                которую держит на балансе предприятия. Мы обладаем собственной ремонтной базой,
                что гарантирует отличное техническое состояние спецтехники.</p>
            </div>
            <div class="features-list">
                <div>
                    <div>
                        <img src="img/1.png" class="k1" width="60" height="60">
                        <p>Работаем без выходных и гарантируем сроки поставки</p>
                    </div>
                    <div>
                        <img src="img/2.png" class="k1" width="60" height="60">
                        <p>Заправка - наша забота! Вы платите только за аренду</p>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="img/3.png" class="k1" width="60" height="60">
                        <p>Доставим заказанную технику на объект в согласованные сроки</p>
                    </div>
                    <div>
                        <img src="img/4.png" class="k1" width="60" height="60">
                        <p>Спецтехника сдается заправленная в исправном состоянии</p>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="img/5.png" class="k1" width="60" height="60">
                        <p>Техника с опытными машинистами и водителями</p>
                    </div>
                    <div>
                        <img src="img/6.png" class="k1" width="60" height="60">
                        <p>Принимаем все виды оплаты – наличный и безналичный расчет</p>
                    </div>
                </div>
            </div>
            <div class="back-img"></div>
        </article>
        <article class="specbox">
            <div>
                <h1 class="spec-h1">Широкий выбор спецтехники</h1>
                <p class="type-p">Землеройная техника</p>
                    <hr class="specbox-hr">
                <div class="zeml-tech">
                    <div>
                        <img src="img/eks.svg" width="200">
                        <form action="arend_exc_page/arend_exc.php">
                            <button class="btnew" >Эксковаторы</button>
                        </form>
                    </div>
                    <div>
                        <img src="img/pogruz.svg"width="200">
                        <form action="arend_pogr_page/arend_pogr.php">
                            <button class="btnew">Погрузчики</button>
                        </form>
                        
                    </div>
                    <div>
                        <img src="img/buldozer.svg"width="200">
                        <form action="arend_buld_page/arend_buld.php">
                            <button class="btnew">Бульдозеры</button>
                        </form>
                    </div>
                    
                </div>
                <p class="type-p">Грузоподъемная техника</p>
                    <hr class="specbox-hr">
                <div class="podjem-tech">                   
                    <div>
                        <img src="img/avtovyshka.svg"width="200">
                        <form action="arend_vish_page/arend_vish.php">
                            <button class="btnew">Автовышки</button>
                        </form>
                    </div>
                    <div>
                        <img src="img/avtokran.svg"width="200">
                        <form action="arend_kran_page/arend_kran.php">
                            <button class="btnew">Автокраны</button>
                        </form>
                    </div>
                    <div>
                        <img src="img/manipulyator.svg"width="200">
                        <form action="arend_manip_page/arend_manip.php">
                            <button class="btnew">Манипуляторы</button>
                        </form>
                    </div>
                </div>
                <p class="type-p">Грузовой транспорт</p>
                    <hr class="specbox-hr">
                <div class="gruz-tech">
                    <div>
                        <img src="img/samosval.svg"width="200">
                        <form action="arend_samosval_page/arend_samosval.php">
                            <button class="btnew">Самосвалы</button>
                        </form>
                    </div>
                    <div>
                        <img src="img/tral.svg"width="200">
                        <form action="arend_tral_page/arend_tral.php">
                            <button class="btnew">Тралы</button>
                        </form>
                    </div>
                    <div>
                        <img src="img/bort_avto.svg"width="200">
                        <form action="arend_bort_page/arend_bort.php">
                            <button class="btnew">Бортовые автомобили</button>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <footer>
        <article>
            <div>
                <div> 
                    <p class="footer-p">«SPECRENT» - аренда спецтехники</p>
                    <p class="footer-p"> Сайт носит информационный характер. Размещенные на сайте материалы и цены не являются публичной офертой</p>
                </div>
            </div>
        </article>
    </footer>
</body>
</html>