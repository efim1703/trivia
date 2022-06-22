<?php

$id = $_POST['id_product'];
$name = $_POST['name'];
$price = $_POST['price'];

$result = $db->query(
    "UPDATE 
        `products` 
     SET 
        `name` = '$name',
        `price` = '$price'
     WHERE 
     `products`.`id` = $id"
);
