<?php

if (isset($_GET['course_id']))
{
    $course_id = $_GET['course_id'];
}

if (isset($_GET['course_title']))
{
    $course_title = $_GET['course_title'];
}

require_once 'querys/modules.query.php'; 

require_once 'resources/header.resources.php';

$course_modules = modules($pdo, $course_id);

if ($course_modules && count($course_modules) > 0) 
{
?>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>List of modules and contents in <?php echo htmlspecialchars($course_title); ?></h1>
            <h4><?php echo htmlspecialchars($course_title); ?> > Modules</h4>
            <?php
            foreach ($course_modules as $modules) 
            {
                echo "<a href='contents.php?course_title=" . $_GET['course_title'] . "&module_id=" . $modules['module_id'] . "&module_title=" . $modules['module_title'] . "' style='color: darkviolet;'><h2>$modules[module_title]</h2></a>";
                echo "Module ID: " . $modules['module_id'];
                echo "<br>";
                echo "Total contents: " . $modules['total_contents'];
            } 
}
            ?>
        </div>
    </div>


<?php
    require_once 'resources/footer.resources.php'
?>
