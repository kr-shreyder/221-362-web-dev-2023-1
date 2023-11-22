<?php
$text = $_POST['text'];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Михеев</title>
</head>

<body>
<header>
    <div class="logo">
        <img src="./mospolytech-logo-white.png"
             alt="mospolytech-logo">
    </div>
    <div class="title">
        <h1><a href="/10lab">Лабораторная работа №10</a></h1>
        <h2>Михеев Даниил Евгеньевич</h2>
        <h2>211-362</h2>
    </div>
</header>
<main>
    <div class="text-block">
        <p>
            <?php
            if (isset($text) && $text != '') {
                echo $text;
            } else {
                echo "Нет текста для анализа";
            }
            ?>
        </p>
    </div>
    <div class="text-analysis">
        <h3>Анализ текста</h3>
        <p>
            1.Кол-во символов в тексте (включая пробелы): 
            <?= mb_strlen($text) ?>
        </p>
        <p>
            2. Кол-во букв: 
            <?= mb_strlen(preg_replace("/[^a-zA-Zа-яА-Я]/u", "", $text)) ?>
        </p>
        <p>
            3. Кол-во строчных и заглавных букв по отдельности: 
            <?= mb_strlen(preg_replace("/[^a-zа-я]/u", "", $text)) ?> 
            строчных и 
            <?= mb_strlen(preg_replace("/[^A-ZА-Я]/u", "", $text)) ?>
            заглавных

        </p>
        <p>
            4. Кол-во знаков препинания: <?= mb_strlen(preg_replace("/[^.,:;!?-]/u", "", $text)) ?>
        </p>
        <p>
            5. Кол-во цифр: <?= mb_strlen(preg_replace("/[^0-9]/u", "", $text)) ?>
        </p>
        <p>
            6. Кол-во слов: <?php
             if ($text != ''){
                echo count(explode(" ", preg_replace("/[^a-zA-Zа-яА-Я]/u", " ", $text)));
            }else {
                echo 0;
            }
            ?>
        </p>
        <p>
            7. Кол-во вхождений каждого символа текста :
        <div class="words-block">
            <table>
                <tr>
                    <th>Символ</th>
                    <th>Кол-во</th>
                </tr>

            <?php
                $symbols = array();
                $unique_symbols = array_unique($symbols); // уникальные символы
                $unique_symbols_freq = array(); // частота встречаемости символов


                for ($i = 0; $i < mb_strlen($text); $i++) {
                    array_push(
                        $symbols,
                        mb_strtolower(
                            mb_substr($text, $i, 1)
                        )
                    );
                }

                foreach ($unique_symbols as $symbol) $unique_symbols_freq[$symbol] = 0; // устанавливаем начальные значения
                foreach ($symbols as $symbol) $unique_symbols_freq[$symbol]++; // считаем частоту встречаемости символов
                foreach ($unique_symbols_freq as $unique_symbol => $frequency) { // выводим результат
                    if ($unique_symbol == " ") $unique_symbol = "'space'";  // пробелы заменяем на 'space'
                    echo "<tr><th>$unique_symbol</th><th>$frequency</th></tr>"; // выводим символ и частоту встречаемости
                }
            ?>
            </table>
        </div>
        <p>
            8. список всех слов в тексте и количество их вхождений,
            отсортированный по алфавиту:
        </p>
        <div class="words-block">
            <table>
                <?php
                    $words = explode(" ", preg_replace("/[^a-zA-Zа-яА-Я]/u", " ", $text));  // разбиваем текст на слова
                    $words = array_filter($words); // удаляем пустые элементы
                    $unique_words = array_unique($words); // уникальные слова
                    $unique_words_freq = array(); // частота встречаемости слов
                    foreach ($unique_words as $unique_word) $unique_words_freq[$unique_word] = 0; // устанавливаем начальные значения
                    foreach ($words as $word) $unique_words_freq[$word]++; // считаем частоту встречаемости слов
                    ksort($unique_words_freq); // сортируем по алфавиту
                    foreach ($unique_words_freq as $unique_word => $frequency)  // выводим результат
                        echo "<tr><th>$unique_word</th> <th>$frequency</th></tr>";
                ?>
            </table>
        </div>
        <div class="button-block">
            <form action="/10lab">
                <input type="submit" value="Другой анализ" />
            </form>
        </div>
    </div>
</main>
<footer>
    <div>Московский политехнический университет</div>
</footer>

</body>

</html>