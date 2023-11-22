<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Шрейдер К.И. 221-362 lr9</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img\mospolytech-logo-white.png" alt="mospolytech-logo">
        </div>
        <div class="title">
            <h1>Шрейдер Кристина Ивановна</h2>
                <h2>221-362</h2>
                <h2>Лабораторная работа №9 Вариант 2
            </h1>
        </div>
    </header>
    <main>
        <?php
        $x = 0;
        $encounting = 100;
        $step = 1;
        $type = "E";
        $result;
        $min_value = 0;
        $max_value = 600;
        $max = PHP_INT_MIN;
        $min = PHP_INT_MAX;
        $sum = 0;
        $average;

        function f($x)
        {
            if ($x != 0) {
                if ($x <= 10 && $x != 0) {
                    return ($x + 10) / $x;
                } else if ($x > 10 && $x < 20) {
                    return $x / 7 * ($x - 2);
                } else if ($x >= 20) {
                    return $x * 8 + 2;
                }
            } else
                return 'error';
        }

        switch ($type) {
            case 'B':
                echo '<ul>';
                break;
            case 'C':
                echo '<ol>';
                break;
            case 'D':
                echo '<table border="1">';
                break;
            case 'E':
                echo '<div class="block_layout">';
                break;
            default:
            //
        }

        // Цикл с использованием for
        for ($i = 0; $i < $encounting; $i++, $x += $step) {
            if (f($x) == 'error') {
                if ($type == 'A') {
                    echo 'f(' . $x . ') = error';
                    if ($i < ($encounting - 1))
                        echo '<br>';
                } else if ($type == 'B')
                    echo '<li>f(' . $x . ') = error' . '</li>';
                else if ($type == 'C')
                    echo '<li>f(' . $x . ') = error' . '</li>';
                else if ($type == 'D')
                    echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . 'error' . '</td></tr>';
                else if ($type == 'E')
                    echo '<div>f(' . $x . ') = error' . '</div>';
                continue;
            } else {
                $result = round(f($x), 2);

                if ((f($x) > $max_value || f($x) < $min_value))
                    continue;

                if ($type == 'A') {
                    echo 'f(' . $x . ') = ' . $result;
                    if ($i < ($encounting - 1))
                        echo '<br>';
                } else if ($type == 'B')
                    echo '<li>f(' . $x . ') = ' . $result . '</li>';
                else if ($type == 'C')
                    echo '<li>f(' . $x . ') = ' . $result . '</li>';
                else if ($type == 'D')
                    echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
                else if ($type == 'E')
                    echo '<div>f(' . $x . ') = ' . $result . '</div>';

                if ($result > $max)
                    $max = $result;
                if ($result < $min && $result != '')
                    $min = $result;
                $sum += $result;
            }
        }

        //Цикл с использованием While
        // $i = 0;
        // while (($i < $encounting) && (f($x) > $max_value || f($x) < $min_value)) {
        //     if (f($x) == 'error') {
        //         if ($type == 'A') {
        //             echo 'f(' . $x . ') = ' . $result;
        //             if ($i < ($encounting - 1))
        //                 echo '<br>';
        //         } else if ($type == 'B')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'C')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'D')
        //             echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
        //         else if ($type == 'E')
        //             echo '<div>f(' . $x . ') = ' . $result . '</div>';
        //         continue;
        //     } else {
        //         $result = f($x);
        //         if ($type == 'A') {
        //             echo 'f(' . $x . ') = ' . $result;
        //             if ($i < $encounting - 1)
        //                 echo '<br>';
        //         } else if ($type == 'B')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'C')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'D')
        //             echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
        //         else if ($type == 'E')
        //             echo '<div>f(' . $x . ') = ' . $result . '</div>';
        
        //         if ($result > $max)
        //             $max = $result;
        //         if ($result < $min && $result != '')
        //             $min = $result;
        //         $sum += $result;
        
        //         // Инкремент итератора и изменение $x
        //         $i++;
        //         $x += $step;
        //     }
        // }
        
        // // Цикл с использованием do-while
        // $i = 0;
        // do {
        //     if (f($x) == 'error') {
        //         if ($type == 'A') {
        //             echo 'f(' . $x . ') = ' . $result;
        //             if ($i < ($encounting - 1))
        //                 echo '<br>';
        //         } else if ($type == 'B')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'C')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'D')
        //             echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
        //         else if ($type == 'E')
        //             echo '<div>f(' . $x . ') = ' . $result . '</div>';
        //         continue;
        //     } else {
        //         $result = f($x);
        //         if ($type == 'A') {
        //             echo 'f(' . $x . ') = ' . $result;
        //             if ($i < $encounting - 1)
        //                 echo '<br>';
        //         } else if ($type == 'B')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'C')
        //             echo '<li>f(' . $x . ') = ' . $result . '</li>';
        //         else if ($type == 'D')
        //             echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
        //         else if ($type == 'E')
        //             echo '<div>f(' . $x . ') = ' . $result . '</div>';
        
        //         if ($result > $max)
        //             $max = $result;
        //         if ($result < $min && $result != '')
        //             $min = $result;
        //         $sum += $result;
        
        //         // Инкремент итератора и изменение $x
        //         $i++;
        //         $x += $step;
        //     }
        // } while (($i < $encounting) && (f($x) > $max_value || f($x) < $min_value));
        
        switch ($type) {
            case 'B':
                echo '</ul>';
                break;
            case 'C':
                echo '</ol>';
                break;
            case 'D':
                echo '</table>';
                break;
            case 'E':
                echo '</div>';
                break;
            default:
            //..
        }

        $average = $sum / $encounting;
        ?>
    </main>
    <footer>
        <div>Московский политехнический университет</div>
        <div>
            <?php echo 'type: ' . $type ?>
        </div>
        <div>
            <?php echo 'max: ' . $max ?>
        </div>
        <div>
            <?php echo 'min: ' . $min ?>
        </div>
        <div>
            <?php echo 'sum: ' . round($sum) ?>
        </div>
        <div>
            <?php echo 'average: ' . round($average) ?>
        </div>
    </footer>
</body>

</html>