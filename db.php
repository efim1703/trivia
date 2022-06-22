<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=trivia', 'root', '');
} catch (PDOExeption $e) {
    $e->getMessage();
    die();
}

?>