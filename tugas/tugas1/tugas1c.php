<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./tugas1c.css">
</head>
<body>
<?php
    function boxPyramid() {
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo "<span>$j</span>";
            }
            if ($i = $j ) {
                echo "</div>";
            }
            echo "<div>";
        }
    }
    boxPyramid();
?>
</body>
</html>