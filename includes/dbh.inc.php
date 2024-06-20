<?php

// This file is responsable for connecting the code to the DB
$dsn = "mysql:host=localhost;dbname=course_management";
$dbusername = "root";
$dbpassword = "";

try 
{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) 
{
    echo "Connection failed: " . $e->getMessage();
}