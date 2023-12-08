<?php include './result.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dinamic content</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                if(!isset($_GET['content']))
                    $_GET['content'] = 'n/a';

                if(isset($_GET['html_type']) && $_GET['html_type'] == 'TABLE') {
                    echo '<li><a href="?html_type=TABLE&content='.$_GET['content'].'" class="active">Табличная вёрстка</a></li>';
                    echo '<li><a href="?html_type=DIV&content='.$_GET['content'].'">Блочная вёрстка</a></li>';
                } else if(isset($_GET['html_type']) && $_GET['html_type'] == 'DIV') {
                    echo '<li><a href="?html_type=TABLE&content='.$_GET['content'].'">Табличная вёрстка</a></li>';
                    echo '<li><a href="?html_type=DIV&content='.$_GET['content'].'" class="active">Блочная вёрстка</a></li>';
                } else {
                    echo '<li><a href="?html_type=TABLE&content='.$_GET['content'].'">Табличная вёрстка</a></li>';
                    echo '<li><a href="?html_type=DIV&content='.$_GET['content'].'">Блочная вёрстка</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <aside>
        <ul>
            <?php
            if(!isset($_GET['html_type']))
                $_GET['html_type'] = 'TABLE';
            if(isset($_GET['content']) && $_GET['content'] != 'n/a') {
                echo '<li><a href="?html_type='.$_GET['html_type'].'&content=n/a">Всё</a></li>';
            } else {
                echo '<li><a href="?html_type='.$_GET['html_type'].'&content=n/a" class="active">Всё</a></li>';
            }
            for($i = 2; $i < 10; $i++) {
                if(isset($_GET['content']) && $_GET['content'] == $i) {
                    echo '<li><a href="?content='.$i.'&html_type='.$_GET['html_type'].'" class="active">'.$i.'</a></li>';
                } else {
                    echo '<li><a href="?content='.$i.'&html_type='.$_GET['html_type'].'">'.$i.'</a></li>';
                }
            }
            ?>
        </ul>
    </aside>
    <main>
        <div class="content">
            <?php
            if(isset($_GET['content']) && ($_GET['content'] != 'n/a'))
                onceRowCreator($_GET['content'], $_GET['html_type']);
            else
                if(!isset($_GET['html_type']))
                    fullMultiTableCreator("TABLE");
                else
                    fullMultiTableCreator($_GET['html_type']);
            ?>
        </div>
    </main>
    <footer>
        <?php
        date_default_timezone_set("Europe/Moscow");
        if(!isset($_GET['html_type']))
            echo 'Верстка не выбрана <br>';
        else if($_GET['html_type'] == "TABLE")
            echo 'Табличная верстка <br>';
        else
            echo 'Блочная верстка <br>';

        if(!isset($_GET['content']) || $_GET['content'] == 'n/a')
            $s = 'Таблица умножения полностью. <br>';
        else
            $s = 'Столбец таблицы умножения на '.$_GET['content'].'. <br>';
        echo $s.date('d.Y.M h:i:s');
        ?>
    </footer>
</body>

</html>