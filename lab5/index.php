<?php
include 'header.php';
include 'bd.php';
$result = pg_query($bd_conn, "SELECT * FROM images");
?>

<div class="container">
    <?php
    while ($name = pg_fetch_assoc($result)) {
        ?>
        <figure class="picture">
            <img title="<?php echo $name['title']; ?>" src="images/<?php echo $name['path'];?>" />
        </figure>
        <?php
    }

    $result = pg_query($bd_conn, "SELECT * FROM terms");

    $columnNames = array(
        'id' => '№',
        'term' => 'Термин',
        'determination' => 'Определение'
    );

    echo "<table class='pony-table'>";
    echo "<tr>";
    foreach ($columnNames as $columnName) {
        echo "<th>$columnName</th>";
    }
    echo "</tr>";

    while ($row = pg_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $colName => $colValue) {
            echo "<td>" . $colValue . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>

<?php include 'footer.php' ?>