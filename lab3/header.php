<?php
$title = 'Pony-guide';
?>

<!DOCTYPE HTML>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>

<body>
    <div class="header">
        <nav class="menu">
            <ul>
                <li><a href="<?php

                $name = 'Главная';
                $link = 'index.php';

                echo $link;

                ?>">
                        <?php echo $name; ?>
                    </a></li>
                <li><a href="<?php

                $name = 'Форма обратной связи';
                $link = 'form.php';

                echo $link;

                ?>">
                        <?php echo $name; ?>
                    </a></li>
                <li><a href="<?php

                $name = 'Авторизация';
                $link = 'auth.php';
                $current_page = false;

                echo $link;

                ?>">
                        <?php echo $name; ?>
                    </a></li>
            </ul>
        </nav>
    </div>