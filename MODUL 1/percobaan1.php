<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat List Tahun</title>
</head>
<body>
    <form name="form1" method="post" action="">
    Pilih Tahun
    <select name="tahun" id="tahun">
        <?php for($thn=1; $thn < 50; $thn++){ ?>
            <option value="<?php echo(2000+$thn); ?>"><?php echo (2000+$thn); ?></option>
            <?php } ?>
        </select>
    </form>    

</body>
</html>







