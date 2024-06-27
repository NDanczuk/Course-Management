<?php 

require_once 'includes/dbh.inc.php';

function contents(object $pdo, int $module_id)
{
    $sql = "
    SELECT 
        content.id AS content_id,
        content.title AS content_title
    FROM 
        content
    WHERE
        module_id = :module_id
    GROUP BY 
        content.id, content.title
    ORDER BY 
        content.id ASC";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam("module_id", $module_id);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}