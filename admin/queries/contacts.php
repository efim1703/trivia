<?php

$phone = $_POST['phone'];
$email = $_POST['email'];
$addres = $_POST['addres'];

$result = $db->query(
    "UPDATE 
        `contacts` 
     SET 
        `phone` = '$phone',
        `email` = '$email',
        `addres` =  '$addres'
    WHERE 
        `contacts`.`id` = 1;"
);