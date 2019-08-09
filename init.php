<?php
// `init.php` does general initialisation, such as setting up database
// connections, defining helper functions, etc.

require 'config.php';

session_start();

$mysql_conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if ($mysql_conn->connect_error) {
        die("Connection failed: " . $mysql_conn->connect_error);
}
?>
