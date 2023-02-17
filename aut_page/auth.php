<?php 
session_start();

// если пользователь авторизован, то редирект на главную страницу
if (isset($_SESSION['logged_user']))
{
    header('Location: ../index.php');
    exit;
}

// подключение базы данных
require_once("../bd/db_connect.php");

// авторизация
if (isset($_POST["auth-sent"]))
{
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    
    

    $result = $mysql->query("SELECT * FROM `user` WHERE `user_login` = '$login' AND `user_password` = '$pass'");
    // конвертируем в массив
    $user = $result->fetch_assoc(); 
    
    if ($user) {
        $_SESSION['logged_user'] = $user['user_id'];
        header('Location: ../index.php');
    } else {
        echo "Логин или пароль введены неверно.";
    }
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
                <a type="submit" href="../index.php">
                    <img src="img-aut/logo.png" height="80px"  />
                </a>
            </div>
            <div>
                <form action="../reg-page/reg.php">
                    <button style="width: auto; height: 48px; font-size: 14px;" type="submit" id="reg-btn" class="btn">Регистрация</button>
                </form>
                <button style="width: auto; font-size: 14px;" type="button" id="log-btn" class="btn">Авторизация</button>
                <div class="social-links">
                    <a href="https://vk.com/st66russia?from=quick_search">
                        <img src="img-aut/vk.png" height="30px" />
                    </a>
                    <a href="https://t.me/PitStopServisesBot">
                        <img src="img-aut/telegram.png" height="30px" />
                    </a>
                    <a href="https://wa.me/qr/OGO3NNZSZJ6OM1">
                        <img src="img-aut/whatsapp.png" height="30px" />
                    </a>
                </div>
                <div class="tel">
                    <a href="tel:+79600319417">+7 960 031 94 17</a>
                </div>
                <button a="" type="button" id="contact-btn" class="btn">Заказать звонок</button>
            </div>
        </div>
    </header>
    <main>
        <article>
            <div class="aut">
            <div class="auth-title">Вход в личный кабинет</div>
            <form method="POST">
            <div class="loginLabel">Логин</div>
            <input type="email" class="form-control" name="login" id="login">
            <div class="pswrdLabel">Пароль</div>
            <input type="password" class="form-control" name="pass" id="pass">
            <br>
            <input type="submit" class="btn-aut" name="auth-sent" value="Войти">
            <div class="signUpLink">Впервые у нас? <br> <a href="../reg-page/reg.php">Регистрация</a></div>
        </form>
            </div>
        </article>
    </main>
</body>
</html>