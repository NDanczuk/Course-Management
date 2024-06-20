<?php

require_once 'D:\xampp\htdocs\MM Course Management\includes\dbh.inc.php';

function report_05($pdo) // This function executes the query that selects the users that already watched the class ID=2 (watched_class=yes)
{ 
    $sql = "
    SELECT 
        users.id AS user_id,
        users.name AS user_name,
        users.email AS user_email,
        users.user_status AS user_status
    FROM 
        users
    WHERE 
        watched_class = 'yes'";

    $result = $pdo->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}