<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u998996541_db_prueba', 'u998996541_Developer', 'r2siDD^&L#56');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>