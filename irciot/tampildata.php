<?php 

   //Simpan dengan nama file panel.php
     require "koneksidb.php";
     $data    = query("SELECT * FROM tb_monitoring")[0];


 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Dashboard Monitoring</title>
    
  </head>
  <body class="bg-dark">

    <center>

    <div >
	     <img class="img-fluid responsive-sm mt-3" src="img/interactiverobotics.png" alt="Responsive image" style="width:200px; height:200px;">
	</div>  
        
       
        <h5 class="text-white">LOG DATA SENSOR</h5>
		  
        <div class="col">
                
            <table border="1" width="100%" height="100%" class="text-dark"  class="table table-striped table-responsive"> 

                <tr class= "bg-white" ><th>NO</th><th>WAKTU</th><th>NAMA DEVICE</th><th>SUHU</th><th>KELEMBABAN</th></tr>
                    <form action="/irciot/hapusdata.php" method="POST" >
                    <button type="submit">HAPUS SEMUA DATA LOG</button>
                    </form> 
                |
                <form action="/irciot/index.php" method="POST">
                <button type="submit">KEMBALI KE DASHBOARD</button>
                </form>
                <br>

                <?php
                $datatampil = mysqli_query($koneksi, "SELECT * from tb_simpan");
                    $no=1;
                    foreach ($datatampil as $row){
                        echo "<tr class= bg-white >
                            <td>$no</td>
                            <td>".$row['waktu']."</td>
                            <td>".$row['namadevice']."</td>
                            <td>".$row['suhu']."</td>
                            <td>".$row['kelembaban']."</td>
                            </tr>";
                        $no++;
                    }

                $koneksi->close();
                ?>

            </table>
        </div>
        
        
            <footer class="py-3">
            <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy;2020 iwan cilibur | Interactive Robotics</p>
            </div>
            </footer>


    </center>        

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- My Javascript/jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Sweet Alert -->
    <script src="js/sweetalert2.all.min.js"></script>

  </body>
</html>

