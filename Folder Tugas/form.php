<?php
// ambil nilai variabel eror
if(isset($_GET['eror'])){
    $error=$_GET['error'];
}
else{
    $error="";
}

// siapkan pesan kesalahan
$pesan="";
if($error=="variabel_belum_diset"){
    $pesan="<h3>Maaf, anda harus mengisi nama</h3>";
}
if($error=="email_kosong"){
    $pesan="<h3>Maaf, anda harus mengisi email</h3>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form PHP</title>
</head>

<body>
    <h2>Form Login</h2>
    <?php
    echo $pesan;
    ?>
    <form action="proses.php" method="get">
        Nama : <input type="text" name="nama">
        <br>
        Email : <input type="text" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>