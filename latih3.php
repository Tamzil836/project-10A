<!DOCTYPE html>
<html>
<head>
    <title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
    Kapal asing, silakan identifikasikan diri Anda!<br><br>

    <?php
        // Inisiasi beberapa variabel
        $namad = "Bejo";
        $namat = "Noto";
        $namab = "Negoro";

        echo "<b>Ini adalah kapal Federasi Planet USS Enterprise.</b><br>";
        echo "Saya $namad $namat $namab, kapten kapal.<br>";
        echo "Nama lengkap saya adalah $namad $namat $namab.";
    ?>
</body>
</html>
