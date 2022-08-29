<?php
include_once "config/database.php";
include_once "objects/product.php";
include_once "objects/category.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// создадим экземпляры классов Product и Category
$product = new Product($db);
$category = new Category($db);
?>