<?php require 'header.php';
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $productId = mysqli_real_escape_string($link, $_GET['id']);

    $query = "SELECT * FROM product WHERE id = '$productId'";
    $result = mysqli_query($link, $query);

    if ($result) {
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        if ($product) {
            echo "<div class=product-str>";
            echo "<h1>{$product['name']}</h1>";
            echo "<img src='img/{$product['img']}' alt='{$product['name']}'>";
            echo "<p>{$product['description']}</p>";
            echo "<p>Цена: {$product['price']} руб.</p>";
            echo "<p>Наличие: В наличии</p>";
            echo "<p>Полное описание: {$product['full_description']} руб.</p>";
            echo "</div>";
        } else {
            echo "<p>Продукт не найден.</p>";
        }
    } else {
        echo "<p>Ошибка выполнения запроса.</p>";
    }
} else {
    echo "<p>ID продукта не указан.</p>";
}

echo '<a href="catalog.php" class="button">Назад в каталог</a>';

require 'footer.php';
?>