<?php

// This file displays the fourth report

require_once 'querys/report_04.query.php'; 

require_once 'resources/header.resources.php';

$all_contents = report_04($pdo); // This variable executes the query function and stores it's results

?>

<body>
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>List of contents and it's respective courses</h1>
            <?php
                foreach ($all_contents as $content) 
                {
                echo "Content ID: " . $content['content_id'];
                echo "<br>";
                echo "Content title: " . $content['content_title'];
                echo "<br>";
                echo "Course: " . $content['course_title'];
                echo "<br>";
                echo "<br>";
                echo "<br>";
                }
            ?>
        </div>
    </div>
</body>

<?php
require_once 'resources/footer.resources.php';
?>
