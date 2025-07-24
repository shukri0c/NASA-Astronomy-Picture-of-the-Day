<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Hello from PHP!</h1>
    <?php
        echo "<p>Today is " . date('Y-m-d') . "</p>";
        echo "<p>MySQL is working if you see this!</p>";
    ?>
</body>
</html>