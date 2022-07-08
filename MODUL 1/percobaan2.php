<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list /Menu Pilihan</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
    <select name="pilihan[]" size="4" multiple="multiple" id="pilihan[]">
    <?php for ($i=1;$i<10;$i++) { ?>
    <option value="<?php echo $i; ?>">
        List Menu <?php echo $i; ?>
    </option>
    <?php } ?> 
    </select>
    <br />
    <input type="submit" name="button" id="button" value="Submit">
    <br />
    <?php
    if (is_array($_POST["pilihan"])){
        foreach ($_POST["pilihan"] as $value) {
            echo "anda memilih list menu ".$value."<br />";
        }
    }else{
        if (isset($_POST["button"])){
            echo "Maaf!, anda harus";
            echo "Memilih salah satu item";
        }else{
            echo "Pilihlah salah satu data";
        }
    }
    ?>
</body>
</html>

