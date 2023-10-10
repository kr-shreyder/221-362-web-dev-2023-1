<?php require 'header.php' ?>

<main>
    <div class="container">
        <h1>Форма обратной связи</h1>
        <form action="https://www.httpbin.org/post" method="post" enctype="multipart/form-data">
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