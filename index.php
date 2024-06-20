<?php

// This file displays the main menu of the program

    require_once 'resources/header.resources.php';

    require_once 'querys/query_06.query.php';

    $class_02 = query_06($pdo); // This variable executes the query function and stores it's results
?>

<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2>Welcome to the course manager!</h2>
        </div>
        <div class="text-center mb-5">
            <h2>What do you need to see today?</h2>
        </div>
        <form action="#" method="get">
            <div class="text-center mb-4">
                <h3>See the user with the highest number of courses:</h3>
                <button type="submit" class="btn btn-dark" formaction="report_01.php">Go to report</button>
            </div>
            <div class="text-center mb-4">
                <h3>See the course with the highest number of contents:</h3>
                <button type="submit" class="btn btn-dark" formaction="report_02.php">Go to report</button>
            </div>
            <div class="text-center mb-4">
                <h3>See the list of courses, modules and contents:</h3>
                <button type="submit" class="btn btn-dark" formaction="report_03.php">Go to report</button>
            </div>
            <div class="text-center mb-4">
                <h3>See the list of contents and its respective courses:</h3>
                <button type="submit" class="btn btn-dark" formaction="report_04.php">Go to report</button>
            </div>
            <div class="text-center mb-4">
                <h3>See list of users who watched to class <?php echo $class_02['content_title']?>:</h3>
                <button type="submit" class="btn btn-dark" formaction="report_05.php">Go to list</button>
            </div>
        </form>
    </div>

</body>

<?php
    require_once 'resources/footer.resources.php'
?>