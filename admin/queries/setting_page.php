<?php

$title = $_POST['title'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];

$result = $db->query(
    "UPDATE 
        `setting_page` 
     SET 
        `title` = '$title',
        `keywords` = '$keywords',
        `description` =  '$description'
    WHERE 
        `setting_page`.`id` = 1;"
);