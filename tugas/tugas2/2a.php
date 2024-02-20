<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2a.php</title>
    <link rel="stylesheet" href="./2a.css">
</head>
<body>
    <?php
        function altStyle ($text, $style1 = 'style-1', $style2 = 'style-2') {
            return "<div class=$style1><p class=$style2>$text</p></div>";
        }

        echo altStyle("Selamat Datang di Tugas 2a Pemrograman Web...");
    ?>
</body>
</html>