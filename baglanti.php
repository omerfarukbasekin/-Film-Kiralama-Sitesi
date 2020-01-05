<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=infinity;charset=utf8", "infinityrose", "Infinity-1234");
} catch ( PDOException $e ){
     print $e->getMessage();
}

?>

