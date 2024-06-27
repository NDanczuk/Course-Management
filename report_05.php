<?php

// This file displays the list of users that watched to class 2

require_once 'querys/report_05.query.php'; 

require_once 'resources/header.resources.php';

require_once 'querys/query_06.query.php';

$class_02 = query_06($pdo); // This variable executes the query function and stores it's results

$users_data = report_05($pdo); // This variable executes the query function and stores it's results

?>


    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>List of users that watched to class <?php echo $class_02['content_title']?>: </h1>
            <?php
                foreach ($users_data as $user_data) 
                {
                echo "User name: " . $user_data['user_name'];
                echo "<br>";
                echo "User id: " . $user_data['user_id'];
                echo "<br>";
                echo "User e-mail: " . $user_data['user_email'];
                echo "<br>";
                echo "User status: " . $user_data['user_status'];
                echo "<br>";
                echo "<br>";
                echo "<br>";
                }
            ?>
        </div>
    </div>


<?php
require_once 'resources/footer.resources.php';
?>