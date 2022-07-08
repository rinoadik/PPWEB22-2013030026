<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<style>
    #nama{
        color :red;
    }
</style>
<body>
    <h2>PHP Dasar</h2>
    <?php 
        echo "<h3 id='nama'> Rino Adi Kurniawan </h3>";
        //komentar
        /*komentar lebih dari satu */
        //variable
        
        $angka1 = 30;
        $angka2 = 10;

        echo "angka1 = $angka1";
        echo "<br>";
        //menggunakan petik satu angka tdk muncul
        echo 'angka1 = $angka1';
        echo "<br>";
        //jika menggunakan petik satu harus digabung dengan titik
        echo 'angka1 = '.$angka1;

        $jumlah = $angka1 + $angka2;
        echo "<br>";
        echo "$angka1 + $angka2 = $jumlah";
        echo "<br>";
        echo 'jumlah ='.$jumlah;

        //buat opera +-*/
        echo "<br>";
        echo "<h2> operasi mtk</h2>";
        $tambah = $angka1 + $angka2;
        $kurang = $angka1 - $angka2;
        $kali   = $angka1 * $angka2;
        $bagi   = $angka1 / $angka2;

        echo "<br>";
        echo "$angka1 + $angka2 = $tambah";
        echo "<br>";
        echo "$angka1 - $angka2 = $kurang";
        echo "<br>";
        echo "$angka1 * $angka2 = $kali";
        echo "<br>";
        echo "$angka1 / $angka2 = $bagi";













    ?>
</body>
</html>