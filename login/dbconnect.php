<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8mb4', 'root', '12345');
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>