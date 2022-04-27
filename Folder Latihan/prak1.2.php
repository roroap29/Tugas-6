<!DOCTYPE html>
<html>

<head>
    <title>Pemrograman PHP dengan Array</title>
</head>

<body>
    <?php
        // Penulisan array dapat dibuat seperti berikut
        $nama[] = "Roro";
        $nama[] = "Ayu";
        $nama[] = "Pangestuti";
        echo $nama[0] . $nama[1] . $nama[2];
        echo "<br><br>";
        // menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ".$jum_array;
        ?>
</body>

</html>