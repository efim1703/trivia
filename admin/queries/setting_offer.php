<?php

$offer = $_POST['offer'];

$result = $db->query(
    "UPDATE 
        `setting_page` 
     SET 
        `offer` = '$offer'
    WHERE 
        `setting_page`.`id` = 1;"
);