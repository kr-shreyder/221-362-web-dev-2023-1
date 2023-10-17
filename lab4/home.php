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
        echo "<p><h2>ФИО:</h2> <span>$name</span></p>";
        echo "<p><h2>Текст обращения:</h2> <span>$message</span></p>";
        echo "<p><h2>Источник:</h2> <span>$source</span></p></h2>";
        echo "<p><h2>Вы прикрепили файл:</h2><span>$file</span></p></h2>";

        echo '<br><a class="button" href="index.php?N=' . $_POST['name'] . '&E=' . $_POST['email'] . '&R=' . $source . '">Заполнить снова</a></p></br>';
        ?>
    </div>
</body>

</html>