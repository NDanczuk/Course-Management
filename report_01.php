<?php

// This file displays the first report

require_once 'querys/report_01.query.php'; 

require_once 'resources/header.resources.php';

$user = report_01($pdo); // This variable executes the query function and stores it's results

if ($user) 
{
?>

<body>
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>User with the highest number of courses</h1>
            <?php echo "<h4>User's name:  " . $user['user_name']; ?>
            <br>
            <?php echo "User's ID: " . $user['user_id']; ?>
            <br>
            <?php echo "Courses number: " . $user['total_courses']; ?>
        </div>
    </div>
</body>

<?php
} 
else 
{
    echo "No users found.";

}

require_once 'resources/footer.resources.php';
?>