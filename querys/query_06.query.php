<?php

require_once 'D:\xampp\htdocs\MM Course Management\includes\dbh.inc.php';

function query_06($pdo) // This function executes the query that selects the title of the content ID=2
{ 
    $sql = "
    SELECT 
        content.title AS content_title
    FROM 
        content
    WHERE 
        id = 2";

    $result = $pdo->query($sql);
    return $result->fetch(PDO::FETCH_ASSOC);
}

