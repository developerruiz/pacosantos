<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db_prueba', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>