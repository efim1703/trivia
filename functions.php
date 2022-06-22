<?php

// Получаем общие настройки страницы
$setting_page = $db->query("SELECT * FROM `setting_page`")->fetch(PDO::FETCH_ASSOC);

// Получаем контактные данные
$contacts = $db->query("SELECT * FROM `contacts`")->fetch(PDO::FETCH_ASSOC);

// Получаем преимуществ
$advantages = $db->query("SELECT * FROM `advantages`");

// Получение "о нас"
$about = $db->query("SELECT * FROM `about`")->fetch(PDO::FETCH_ASSOC);

// Получаем товары
$products = $db->query("SELECT * FROM `products`");

