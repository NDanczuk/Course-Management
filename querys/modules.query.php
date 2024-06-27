<?php 

require_once 'includes/dbh.inc.php';

function modules(object $pdo, int $course_id)
{
    $sql = "
    SELECT 
        modules.id AS module_id,
        modules.title AS module_title,
        COUNT(content.id) AS total_contents
    FROM 
        modules
    LEFT JOIN 
        content ON modules.id = content.module_id
    WHERE
        course_id = :course_id
    GROUP BY 
        modules.id, modules.title
    ORDER BY 
        modules.id ASC";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam("course_id", $course_id);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}