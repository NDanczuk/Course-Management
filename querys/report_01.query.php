<?php

require_once 'includes/dbh.inc.php';

function report_01($pdo) // This function executes the query that selects the user with the highest number of courses
{
    $sql = "
    SELECT 
        users.id AS user_id,
        users.name AS user_name,
        COUNT(courses.id) AS total_courses
    FROM 
        users
    LEFT JOIN 
        courses ON users.id = courses.users_id
    GROUP BY 
        users.id, users.name
    ORDER BY 
        total_courses DESC
    LIMIT 1";

    $result = $pdo->query($sql);
    return $result->fetch(PDO::FETCH_ASSOC);
}