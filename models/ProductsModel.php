<?php

/**
 * 
 * Модель для таблицы продукции (products)
 * 
 */

/**
 * Получаем последние добавленные товары
 * 
 * @param integer $limit Лимит товаров
 * @return array Массив товаров 
 * 
 */

function getLastProducts($limit = null)
{
    global $db;


    $sql = "SELECT * FROM `products` ORDER BY id DESC";
    
    if($limit)
    {
        $sql .= " LIMIT {$limit}"; 
    }
    
    $rs = mysqli_query($db,$sql);
    
    return createSmartyRsArray($rs); 
}