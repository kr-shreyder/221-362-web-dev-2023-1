<?php require 'header.php' ?>

<?php
if (isset($_GET['N'])) {
    $name = $_GET['N'];
} else {
    $name = '';
}
if (isset($_GET['E'])) {
    $email = $_GET['E'];
} else {
    $email = '';
}
if (isset($_GET['R'])) {
    $source = $_GET['R'];
} else {
    $source = '';
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $category = $_POST['category'];
    $file = $_POST['file'];
    $agreement = isset($_POST['agreement']) ? 'Да' : 'Нет';
    $source = $_POST['source'];
}
?>

<main>
    <div class="container">
        <h1>Форма обратной связи</h1>
        <form action="home.php" method="post">
            <input type="hidden" name="user_id" value="6">

            <div class="form-group">
                <label class="form-label" for="name">ФИО:</label>
                <input id="name" type="text" name="name" value="<?= $name ?>" placeholder=" Иванов Иван Иванович"
                    required>
            </div>

            <div class=" form-group">
                <label class="form-label" for="email">Email:</label>
                <input id="email" type="email" name="email" value="<?= $email ?>" placeholder="example@example.com"
                    required>
            </div>

            <div class="form-group">
                <p class="form-label">Как вы узнали о нас?</p>
                <input type="radio" name="source" id="advertising" value="Реклама в интернете" <?php if ($source == 'Реклама из интернета')
                    echo ' checked="checked"' ?> required>
                    <label for="advertising">Реклама в интернете</label>
                    <input type="radio" name="source" id="friends" value="Рассказали друзья" <?php if ($source == 'Рассказали друзья')
                    echo ' checked="checked"' ?> required>
                    <label for="friends">Рассказали знакомые</label>
                </div>

                <div class="form-group">
                    <label class="form-label" for="category">Тема обращения:</label>
                    <select name="category" id="category" required>
                        <option value="proposal">Предложение</option>
                        <option value="grievance">Жалоба</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">Текст сообщения:</label>
                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Введите сообщениe"> </textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="file">Вложение:</label>
                    <input type="file" name="file" id="file">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="agreement" id="agreement" value="no">
                    <label for="agreement">Даю согласие на обработку персональных данных</label>
                </div>

                <input class="btn" type="submit" value="Отправить">

                <a href="index.php">Назад</a>
            </form>
        </div>
    </main>

<?php require 'footer.php' ?>