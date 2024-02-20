<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2b.php</title>
</head>
<body>
    <?php

        $jawabanInnet = "Isset adalah = digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL. <br> <br>";

        $jawabanEmpty = "Empty adalah = akan menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi. Dengan menggunakan stuktur IF dan fungsi empty(), kita bisa membuat logika validasi objek form mana saja yang dianggap perlu (harus diisi) dan mana yang boleh dikosongkan. Dan kemudian menampilkan pesan error yang sesuai.";

        function soal($style){
            echo $GLOBALS['jawabanIsset'];
            echo $GLOBALS['jawabanEmpty'];
        }

        echo soal (
            "font-family: Arial; font-size: 28px; color: #8c782d; font-style: italic; font-weight: bold;"
        );

    ?>
</body>
</html>