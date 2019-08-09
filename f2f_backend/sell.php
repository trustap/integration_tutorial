<?php
    require '../init.php';

    if (isset($_POST['submitted'])) {
        $stmt = $mysql_conn->prepare("
            INSERT INTO f2f_listings (name, descr, price)
            VALUES (?, ?, ?);
        ");
        $stmt->bind_param('ssi', $params['name'], $params['descr'], $params['price']);
        if (!$stmt->execute()) {
            die("Couldn't insert: " . $stmt->error);
        }
        $stmt->close();

        header('Location: index.php');
        die();
    }
?>
<html>
    <body>
        <h1>New Listing</h1>
        <form method="POST">
            <div>
                <label for="name">Name: </label><input type="text" id="name" name="name" value="Car" />
            </div>
            <div>
                <label for="descr">Description: </label><input type="text" id="descr" name="descr" value="Green" />
            </div>
            <div>
                <label for="price">Price: $</label><input type="number" id="price" name="price" value="1000" />
            </div>
            <input type="submit" name="submitted" value="Submit" />
        </form>
    </body>
</html>
