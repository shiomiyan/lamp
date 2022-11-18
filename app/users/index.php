<?php
try {
    $dsn = 'mysql:host=mysql;dbname=test;charset=utf8';
    $db = new PDO($dsn, 'root', 'root');

    $sql = 'SELECT * FROM test;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
