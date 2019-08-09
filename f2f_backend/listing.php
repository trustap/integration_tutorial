<?php
    require '../init.php';

    $stmt = $mysql_conn->prepare('SELECT * FROM f2f_listings WHERE id = ?;');
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();
    $rows = $stmt->get_result();
    $rows->data_seek(0);
    $row = $rows->fetch_assoc();
?>
<html>
    <body>
        <h1><?php echo htmlspecialchars($row['name']); ?></h1>

        <p>
            <strong>Description:</strong>
            <span>
                <?php echo htmlspecialchars($row['descr']); ?>
            </span>
        </p>
        <p>
            <strong>Price:</strong>
            <span>
                $<?php echo htmlspecialchars($row['price']) ?>
            </span>
        </p>
    </body>
</html>
