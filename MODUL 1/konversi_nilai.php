<html> 
    <head> 
        <title>KOnversi Nilai</title> 
    </head> 
    <style>
          
    body{
    background: #fff;
	font-family: sans-serif;
    }
 
    .konversi{
	width: 335px;
	background: #3498db;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
    }
 
    .bil{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
    }
 
    .tombol{
	background: #EC5159;
	border-top: none;
	border-right: none;
	border-left: 50px;
	border-radius: 5px;
	padding: 10px 20px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
    }

    .judul{
	text-align: center;
	color: #eee;
	font-weight: normal;
    }
    </style>
    <body> 
    <div class="konversi">
    <h2 class="judul">KONVERSI NILAI</h2> 

    <form method="post" action=""> 
    NILAI 
    <br/>
    <input type="text" name="nilai"  class="bil"/>
    <br/>
    <input class="tombol" type="submit" name="submit" value="Submit" /> 
    </form> 

<?php if(isset($_POST['submit'])){ 
$nilai=$_POST['nilai'];

if ($nilai<40)
{
    echo "$nilai DALAM HURUF E"; 
}
else if($nilai<55)
{
    echo "$nilai DALAM HURUF D"; 
}
else if($nilai<60)
{
    echo "$nilai DALAM HURUF C"; 
}
else if($nilai<70)
{
    echo "$nilai DALAM HURUF B"; 
}
else if($nilai<80)
{
   echo "$nilai DALAM HURUF AB"; 
}
else if ($nilai<=100)
{
    echo "$nilai DALAM HURUF A"; 
}
}
?>

</body> 
</html> 