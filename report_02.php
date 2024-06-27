<?php

// This file displays the second report

require_once 'querys/report_02.query.php'; 

require_once 'resources/header.resources.php';

$most_content_courses = report_02($pdo); // This variable executes the query function and stores it's results

if ($most_content_courses && count($most_content_courses) > 0) 
{
?> 


    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>Courses with the highest number of contents</h1>
            <?php 
            foreach ($most_content_courses as $courses_contents) 
            {
                echo "Course title: " . $courses_contents['course_title'];
                echo "<br>";
                echo "Course ID: " . $courses_contents['course_id'];
                echo "<br>";
                echo "Total contents: " . $courses_contents['total_contents'];
                echo "<br>";
                echo "<br>";
            }
            ?>
        </div>
    </div>


<?php

require_once 'resources/footer.resources.php';
}
?>