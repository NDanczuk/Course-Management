<?php

require_once 'includes/dbh.inc.php';

function report_04($pdo) // This function executes the query that selects all contents in the DB, with it's respective courses
{ 
$sql = "
    SELECT 
        content.id AS content_id,
        content.title AS content_title,
        courses.title AS course_title
    FROM 
        content
    INNER JOIN 
        modules ON content.module_id = modules.id
    INNER JOIN 
        courses ON modules.course_id = courses.id";

    $result = $pdo->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}