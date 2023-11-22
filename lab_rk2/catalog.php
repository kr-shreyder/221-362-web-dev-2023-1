<?php require 'header.php' ?>

<main>
    <section class="product-list">
    <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product-item'>";
            echo "<img src='img/{$row['img']}' alt=''>";
            echo "<h3>{$row['name']}</h3>";
            echo "<p>{$row['description']}</p>";
            echo "<p>{$row['price']} руб.</p>";
            echo "<a href='product.php?id={$row['id']}'>Подробнее</a>";
            echo "</div>";
        }
        ?>
    </section>
</main>

<?php require 'footer.php' ?>