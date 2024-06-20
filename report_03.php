<?php

// This file displays the third report

require_once 'querys/report_03.query.php'; 

require_once 'resources/header.resources.php';

$courses_info = report_03($pdo); // This variable executes the query function and stores it's results




if ($courses_info && count($courses_info) > 0) 
{
?>
<body>
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>List of courses, modlues and contents</h1>
            <?php
            foreach ($courses_info as $course) 
            {
                echo "<h2>$course[course_title]</h2>";
                echo "Course ID: " . $course['course_id'];
                echo "<br>";
                echo "Total modules: " . $course['total_modules'];
                echo "<br>";
                echo "Total contents: " . $course['total_contents'];
            } 
}
            ?>
        </div>
    </div>
</body>