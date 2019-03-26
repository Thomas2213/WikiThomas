<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
 <!DOCTYPE html>
<html>
<head>

  <title>MY BLOG</title>
</head>

<body>
    <form id="form-container" class="form-container">
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
  <header>
    
   
 <div class="jumbotron">
  <h1>HELLO MAMANK PEDIA! ACA ACA NEHI NEHI!</h1>
  

</div>

  

  </header>
  
  <h4> Daftar Menu Di Mamank Pedia!</h4>
  <nav>
    <ul>
      <li><a href="register.php">Tambah Postingan</a></li>
      <li><a href="log.php">Baca Postingan</a></li>
    </ul>
  </nav>
  
  
  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
      if($_GET['status'] == 'sukses'){
        echo "Pendaftaran  berhasil!";
      } else {
        echo "Pendaftaran gagal!";
      }
    ?>
  </p>
  <?php endif; ?>
  
  
<H1> Kalo Gabut Belajar Di Bawah ini yuk!!</H1>
<div class="row">
        <div class="col-lg-4">
          <h2>Masukkan Kata Kunci Dan Belajar</h2>
          
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>THOMAS AL KADAFI</h2>
          
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>09031281823033</h2>
          
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
	  <center>
       <div class="menu">
     
			<ul>
				
			
        <label for="input">MamankPedia :</label>
        <input type="text" id="input" value="">
        <button id="submit-btn">submit</button>
					
			</ul>
			
		</div>
		</center>
  </header>
  <li class="wikipedia-container">
        <h3 id="wikipedia-header">Disini Kita Belajar</h3>
        <ul id="wikipedia-links">Nanti ada Linknya Kok!</ul>
    </li>
	    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>   
      </body>
</html>