
    <?php
include 'koneksi.php';
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
}
else
	$nama = '';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CRUD MAHASISWA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-color:#F2F3F4 ;">
        
     <?php
    include 'header.php';
    ?>
        
        <div class="container mt-5" style="padding: 5;background-color: #fff;border:1px solid"><br>
        <h3 class="text-center">DATA MAHASISWA</h3><BR>
        <a href='index.php'> <button type="button" class="btn btn-success">VIEW</button></a>
        <a href='mhs_add.php'>   <button type="button" class="btn btn-danger">ADD</button></a>
          
            <hr> 
            <div class="col">            
                        <form action="" method="post">
				            Cari mhs
                            <br>
                            <input   type="text" name="nama" value="<?= $nama?>" placeholder="masukan nama"> 
				            <input type="submit" name="submit" value="Cari">
			            </form>       
                 
                    
                            <table width='100%' class="table table-striped">
                                <thead class="thead-dark">
                                    <tr >
                                        <th  width='5%'>No.</th>
                                        <th width='5%'>Opsi</th>
                                        <th width='15%'class=col-1>NPM</th>
                                        <th width='25%'class=col-1>Nama</th>
                                        <th class=col-1>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <br>
                                    
                                    <?php
                                    $sql = "SELECT * FROM mhs WHERE nama LIKE '%$nama%'";
                                    $res = $conn->query($sql);
                                    if($res->num_rows > 0){
                                    $i = 0;
                                    while($dat = $res->fetch_assoc()){
                                        $i++;
                                        echo "<tr>
                                        <td>$i</td>
                                        
                                        <td><a href='mhs_detil.php?npm=".$dat['npm']."'>detail</a></td>
                                        <td>".$dat["npm"]."</td>
                                        <td>".$dat["nama"]."</td>
                                        <td>".$dat["alamat"]."</td>
                                        </tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    
                </br>

            </div>
        </div>
        <br>
        <br>
        <!-- Footer
        <footer class="py-2 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">CRUD TABEL MHS</p></div>
        </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
