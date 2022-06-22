<?php

$title = $_POST['title'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];


$result = $db->query(
    "UPDATE 
        `about` 
     SET 
        `title` = '$title',
        `text1` = '$text1',
        `text2` =  '$text2',
        `text3` =  '$text3'
    WHERE 
        `about`.`id` = 1;"
);