<?php require 'header.php' ?>

<main>
    <form method="post" action="https://httpbin.org/post">
        <div class="form">
            <div class="form__item">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" placeholder="Введите логин" required>
            </div>
            <div class="form__item">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Введите пароль" required>
            </div>
            <div class="form__item">
                <input id="remember" name="remember" type="checkbox">
                <label for="remember">Запомнить меня</label>
            </div>
            <input class="form__item" type="submit" value="Войти">
        </div>
    </form>
</main>

<?php require 'footer.php' ?>