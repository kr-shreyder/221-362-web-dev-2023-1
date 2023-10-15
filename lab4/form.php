<?php require 'header.php' ?>

<?php
    if (isset($_GET['N'])) {$fio =$_GET['N'];} else {$fio='';}
    if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
    if (isset($_GET['R'])) {$source =$_GET['R'];} else {$source='';}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $topic = $_POST['topic'];
    $file = $_POST['file'];
    $consent = isset($_POST['consent']) ? 'Да' : 'Нет';
    $source = $_POST['source'];
    

    // Перенаправление на страницу home.php для вывода ответа.
    header("Location: home.php?fio=$fio&message=$message&source=$source&file=$file");
    exit();
}
?>

<main>
    <div class="container">
        <h1>Форма обратной связи</h1>
        <form action="home.php" method="post">
            <input type="hidden" name="user_id" value="6">

            <div class="form-group">
                <label class="form-label" for="name">ФИО</label>
                <input id="name" type="text" name="name" placeholder="Иванов Иван Иванович" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Введите email">
            </div>

            <div class="form-group">
                <p class="form-label">Как вы узнали о нас?</p>
                <input type="radio" name="source" id="advertising" value="advertising" checked>
                <label for="advertising">Реклама в интернете</label>
                <input type="radio" name="source" id="stands" value="friends">
                <label for="friends">Реклама на стэндах</label><br>
                <input type="radio" name="source" id="friends" value="friends">
                <label for="friends">Рассказали знакомые</label>
            </div>

            <div class="form-group">
                <label class="form-label" for="category">Категория обращения</label>
                <select name="category" id="category">
                    <option value="proposal">Предложение</option>
                    <option value="grievance">Жалоба</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="message">Текст сообщения</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Введите сообщениe"> </textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="attachment">Вложение</label>
                <input type="file" name="attachment" id="attachment">
            </div>

            <div class="form-group">
                <input type="checkbox" name="agreement" id="agreement" value="yes">
                <label for="agreement">Даю согласие на обработку персональных данных</label>
            </div>

            <input class="btn" type="submit" value="Отправить">

            <a href="index.html">Назад</a>
        </form>
    </div>
</main>

<?php require 'footer.php' ?>