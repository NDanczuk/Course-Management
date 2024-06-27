<?php

if (isset($_GET['module_id']))
{
    $module_id = $_GET['module_id'];
}

if (isset($_GET['module_title']))
{
    $module_title = $_GET['module_title'];
}

require_once 'querys/contents.query.php'; 

require_once 'resources/header.resources.php';

$module_contents = contents($pdo, $module_id);

if ($module_contents && count($module_contents) > 0) 
{
?>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>List of contents in <?php echo htmlspecialchars($module_title); ?></h1>
            <?php
            foreach ($module_contents as $contents) 
            {
                echo "<h2>$contents[content_title]</h2></a>";
                echo "Content ID: " . $contents['content_id'];
                echo "<br>";
            } 
}
            ?>
        </div>
    </div>


<?php
    require_once 'resources/footer.resources.php'
?>