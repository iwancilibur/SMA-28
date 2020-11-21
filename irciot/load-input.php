<?php 
   require "koneksidb.php";	

  
     $data = query("SELECT * FROM tb_monitoring")[0];

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>	</title>
 </head>
 <body>

   <div class="row mt-3">	

  

   <div class="col">
		<div class="card" style="max-width:18rem;">
		  <h5 class="card-header bg-primary text-white">Nama Device</h5>
		  <div class="card-body bg-dark text-light">
		       <h3><?=$data["namadevice"];?></h3>
		  </div>
		</div>
	</div>

	<div class="col">
		<div class="card" style="max-width:18rem;">
		  <h5 class="card-header bg-primary text-white">Suhu</h5>
		  <div class="card-body bg-dark text-light">
		       <h3><?=$data["suhu"];?> `C</h3>
		  </div>
		</div>
	</div>

	<div class="col">
		<div class="card" style="max-width:18rem;">
		  <h5 class="card-header bg-primary text-white">Kelembaban</h5>
		  <div class="card-body bg-dark text-light">
		       <h3><?=$data["kelembaban"];?> %</h3>
		  </div>
		</div>
	</div>
	

</div>			
       
 
 </body>
 </html>