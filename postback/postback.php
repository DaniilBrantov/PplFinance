<?php
/**
 * Template Name: postback
 *
 
 */


// Запускаем сессию
session_start();

// Получаем значения из URL-строки запроса
$offer_id = isset($_GET['offer_id']) ? $_GET['offer_id'] : '';
$offer_name = isset($_GET['offer_name']) ? $_GET['offer_name'] : '';
$click_id = isset($_GET['click_id']) ? $_GET['click_id'] : '';

// Сохраняем значения в сессию
$_SESSION['offer_id'] = $offer_id;
$_SESSION['offer_name'] = $offer_name;
$_SESSION['click_id'] = $click_id;

// Выводим значения из сессии
echo "Offer ID from session: {$_SESSION['offer_id']} <br>";
echo "Offer Name from session: {$_SESSION['offer_name']} <br>";
echo "Click ID from session: {$_SESSION['click_id']} <br>";

?>