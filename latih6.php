<!DOCTYPE HTML>
<html>
<head>
    <title>Belajar Struktur Keputusan IF ELSEIF ELSE</title>
</head>
<body>
    <?php
        $teman = "andi";

        if ($teman == "budi") {
            echo "Budi adalah teman saya";
        } elseif ($teman == "andi") {
            echo "Andi adalah teman saya";
        } elseif ($teman == "bejo") {
            echo "Saya tidak punya teman";
        } else {
            echo "Saya juga punya teman";
        }
    ?>
</body>
</html>
