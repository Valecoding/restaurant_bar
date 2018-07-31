<?php require "includes/login-header.php";?>

<section class="wrapper">
    <div class="container1"><div class="logo d-mobil-none">
        <img src="img/asht_logo.PNG" alt="logo">
    </div>

    <div class="main-block -two-el newpin">
        <div class="main-tip">
            <ul>
                <li class="title-tip">Пин-код для быстрого доступа</li>
                <li class="text-tip">Придумайте четырехзначный пароль для быстрого
                    доступа к CRM</li>
            </ul>
        </div>
        <div class="form-block ">
            <div class="title">Придумайте пин</div>
        <div class="form-group">
            <form method="post" id="login">
                <input type="password" class="input email pin" placeholder="****" required minlength="4" maxlength="4"><br>
                <input type="password" class="input password pin" placeholder="****" required minlength="4" maxlength="4"><br>
                <button type="submit" class="btn btn-submit btn-color-blue">Сохранить</button>
            </form>
        </div></div>
    </div>
    <div class=" help_link"><a href="#">Мне нужна помощь</a></div></div>
</section>

</body>
</html>