<?php require 'header.php' ?>

<main>
    <div class="container">
        <h1>Авторизация</h1>
        <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label class="form-label" for="login">Логин</label>
                <input id="login" type="text" name="login" placeholder="Введите логин" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Пароль</label>
                <input id="password" type="password" name="password" placeholder="Введите пароль" required>
            </div>

            <div class="form-group">
                <input id="remember" name="remember" type="checkbox" value="yes">
                <label for="remember">Запомнить меня</label>
            </div>

            <input class="btn" type="submit" value="Войти">
            <a href="index.html">Назад</a>
        </form>
    </div>
</main>

<?php require 'footer.php' ?>