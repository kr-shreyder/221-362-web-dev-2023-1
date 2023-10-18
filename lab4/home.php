<?php
include 'header.php';
?>

<body>
    <div class="container">
        <?php
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $file = $_POST['file'];
            $message = $_POST['message'];
            $category = $_POST['category'];
            if (isset($_POST['source'])) {
                $source = $_POST['source'];
            } else {
                $source = '';
            }
        }

        echo "<h1>Ответ на ваше обращение:</h1>";
        echo '<p> Здравствуйте, ' . $name . '</p>';
        if ($category == 'propose') {
            echo '<p>Спасибо за ваше предложение:</p>';
            echo '<textarea>' . $message . '</textarea>';
        } else {
            echo '<p>Мы рассмотрим Вашу жалобу:</p>';
            echo '<p>' . $message . '</p>';
        }

        echo "<p><h2>Источник:</h2>$source</p>";
        echo "<p><h2>Вы прикрепили файл:</h2>$file</p>";

        echo '<br><a class="button" href="form.php?N=' . $name . '&E=' . $_POST['email'] . '&R=' . $source . '">Заполнить снова</a></p></br>';
        ?>
    </div>
</body>

</html>