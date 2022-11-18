<?php
    try {
        $dsn = 'mysql:host=mysql;dbname=test;charset=utf8';
        $db = new PDO($dsn, 'root', 'root');

        $sql = 'SELECT version();';
        $contact = $db->prepare($sql);
        $contact->execute();
        $result = $contact->fetchAll(PDO::FETCH_ASSOC);

        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
?>
