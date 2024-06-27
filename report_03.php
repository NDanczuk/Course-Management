<?php

// This file displays the third report

require_once 'querys/report_03.query.php'; 

require_once 'resources/header.resources.php';

$courses_info = report_03($pdo); // This variable executes the query function and stores it's results




if ($courses_info && count($courses_info) > 0) 
{
?>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>List of courses, modules and contents</h1>
            <?php
            foreach ($courses_info as $course) 
            {
                echo "<a href='modules.php?course_id=" . $course['course_id'] . "&course_title=" . $course['course_title'] . "' style='color: darkviolet;'><h2>$course[course_title]</h2></a>";
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


<?php
    require_once 'resources/footer.resources.php'
?>