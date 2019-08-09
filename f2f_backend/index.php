<?php
    require '../init.php';
?>
<html>
    <body>
        <h1>Home</h1>
        <ul>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="trustap.php">Transactions</a></li>
        </ul>
        <h2>Listings</h2>
        <ul>
<?php
    $rows = $mysql_conn->query('SELECT * FROM f2f_listings');
    $rows->data_seek(0);
    while ($row = $rows->fetch_assoc()) {
        echo '<li>';
        echo htmlspecialchars($row['name']) . '(' .  htmlspecialchars($row['descr']) . '): $' .  htmlspecialchars($row['price']);
        echo " <a href='listing.php?id=" . htmlspecialchars($row['id']) . "'>Visit</a>";
        echo '</li>';
    }
?>
        </ul>
    </body>
</html>
