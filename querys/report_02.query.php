<?php

require_once 'includes/dbh.inc.php';

function report_02($pdo) 
// This function executes the query that select the course with the highest number of modules, the query will select multiple courses if they have equal number of modules
{
    $max_contents = "
    SELECT 
        MAX(content_count) AS max_contents
    FROM (
        SELECT 
            COUNT(content.id) AS content_count
        FROM 
            courses
        LEFT JOIN 
            modules ON courses.id = modules.course_id
        LEFT JOIN 
            content ON modules.id = content.module_id
        GROUP BY 
            courses.id
    ) AS subquery";

    $max_contents_result = $pdo->query($max_contents);
    $max_contents_row = $max_contents_result->fetch(PDO::FETCH_ASSOC);
    $max_contents = $max_contents_row['max_contents'];

    $sql = "
    SELECT 
        courses.id AS course_id,
        courses.title AS course_title,
        COUNT(content.id) AS total_contents
    FROM 
        courses
    LEFT JOIN 
        modules ON courses.id = modules.course_id
    LEFT JOIN 
        content ON modules.id = content.module_id
    GROUP BY 
        courses.id, courses.title
    HAVING 
        total_contents = :max_contents
    ORDER BY 
        courses.id ASC";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':max_contents', $max_contents, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
