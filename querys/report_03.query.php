<?php 

require_once 'includes/dbh.inc.php';

function report_03($pdo) // This function executes the query that selects all the courses in the DB and the number of modules and contents they contain
{
    $sql = "
    SELECT 
        courses.id AS course_id,
        courses.title AS course_title,
        COUNT(DISTINCT modules.id) AS total_modules,
        COUNT(content.id) AS total_contents
    FROM 
        courses
    LEFT JOIN 
        modules ON courses.id = modules.course_id
    LEFT JOIN 
        content ON modules.id = content.module_id
    GROUP BY 
        courses.id, courses.title
    ORDER BY 
        courses.id ASC";

    $stmt = $pdo->query($sql);
    if ($stmt) 
    {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else
    {
        return [];
    }
}