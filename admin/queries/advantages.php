<?php

$title1 = $_POST['title1'];
$text1 = $_POST['text1'];
$title2 = $_POST['title2'];
$text2 = $_POST['text2'];
$title3 = $_POST['title3'];
$text3 = $_POST['text3'];

$db->query(
    "UPDATE 
        `advantages` 
     SET 
        `title` = '$title1',
        `text` = '$text1'
     WHERE 
     `advantages`.`id` = 1"
);

$db->query(
    "UPDATE 
        `advantages` 
     SET 
        `title` = '$title2',
        `text` = '$text2'
     WHERE 
     `advantages`.`id` = 2"
);

$result = $db->query(
    "UPDATE 
        `advantages` 
     SET 
        `title` = '$title3',
        `text` = '$text3'
     WHERE 
     `advantages`.`id` = 3"
);