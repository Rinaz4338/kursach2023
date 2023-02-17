<?php 
session_start();

// подключение базы данных
require_once("../bd/db_connect.php");

// регистрация
if (isset($_POST["reg-sent"]))
{
    
    $login = $_POST["emailForm"];
    $pass = $_POST["passwordForm"];
    
    $update = $mysql->query("INSERT INTO user (user_login, user_password) VALUES ('$login','$pass')");
        header('Location: ../aut_page/auth.php');
}
?>
<!DOCTYPE html>
<html lang="en">

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
                <a href="../index.php">
                    <img src="img-reg/logo.png" height="80px"  />
                </a>
            </div>
            <div>
                <button style="width: auto; font-size: 14px;" href="reg_page/index.php" type="button" id="reg-btn" class="btn">Регистрация</button>
                <form action="../aut_page/auth.php">
                    <button style="width: auto; height: 48px; font-size: 14px;" type="submit" id="log-btn" class="btn">Авторизация</button>
                </form>
                <div class="social-links">
                    <a href="#">
                        <img src="img-reg/vk.png" height="30px" />
                    </a>
                    <a href="https://t.me/PitStopServisesBot">
                        <img src="img-reg/telegram.png" height="30px" />
                    </a>
                    <a href="https://wa.me/qr/OGO3NNZSZJ6OM1">
                        <img src="img-reg/whatsapp.png" height="30px" />
                    </a>
                </div>
                <div class="tel">
                    <a href="tel:+79600319417">+7 960 031 94 17</a>
                </div>
                <button a="" type="submit" id="contact-btn" class="btn">Заказать звонок</button>
            </div>
        </div>
    </header>
    <main>
        <article>
            <div class="reg">
            <div class="auth-title">Регистрация</div>
                <form method="POST">
                    <div class="mb-3">
                        <p class="text-start"><label for="emailForm">Введите логин</label></p>
                        <input type="email" class="form-control gray-bg" id="emailForm" name="emailForm" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <p class="text-start"><label for="passwordForm">Введите пароль</label></p>
                        <input type="password" class="form-control gray-bg" id="passwordForm" name="passwordForm" aria-describedby="emailHelp">
                        <br>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary text-dark" name="reg-sent" value="Регистрация">
                        <br> <br>
                    </div>
                </form>
            </div>
        </article>
    </main>
</body>
</html>