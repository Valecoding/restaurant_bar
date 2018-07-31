<?php require "includes/login-header.php";?>

<section class="wrapper">
    <div class="container1"><div class="logo d-mobil-none">
        <img src="img/asht_logo.PNG" alt="logo">
    </div>

    <div class="main-block -two-el">
        <div class="main-tip">
            <ul>
                <li class="title-tip">Отлично, вы зарегистрированы!</li>
                <li class="text-tip">Придумайте пароль, состоящий,
                    минимум из 6 символов, латинского
                    алфавита и 1 цифры</li>
            </ul>
        </div>
        <div class="form-block ">
            <div class="title">Придумайте пароль</div>
        <div class="form-group">
            <form method="post" id="login">
                <input type="email" class="input email" placeholder="Почта" value="manager-maria@asht"><br>
                <input type="password" class="input password" placeholder="Пароль" required><br>
                <button type="submit" class="btn btn-submit btn-color-blue">Войти в кабинет</button>
            </form>
        </div></div>
    </div>
    <div class=" help_link"><a href="#">Мне нужна помощь</a></div></div>
</section>

</body>
</html>