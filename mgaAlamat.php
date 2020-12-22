<?php
    include_once 'connect.php';
?>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alamat101 | Mga Alamat</title>
        <link type="text/css" rel="stylesheet" href="mgaAlamat.css" >
		<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<script src="main.js"> </script>
	</head>
    
	<body>
		<div class="dropdown">
			<nav>
				<img class="logo" src="logo.png">
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="mgaAlamat.php">MGA ALAMAT</a></li>
					<li><a href="contact.html">CONTACT US</a></li>
				</ul>			
			</nav>
		</div>
		<h1><i class="fas fa-book-open"></i> Mga Alamat</h1>
		<div class="sidebar">
			<ul>
				<li><a href="alamat1.php">Alamat ng Paru-Paru</a></li>
				<li><a href="alamat2.php">Alamat ng Sampaguita</a></li>
				<li><a href="alamat3.php">Alamat ng Paniki</a></li>
				<li><a href="alamat4.php">Alamat ng Dugong</a></li>
				<li><a href="alamat5.php">Alamat ng Mansanas</a></li>
				<li><a href="alamat6.php">Alamat ng Nara</a></li>
				<li><a href="alamat7.php">Alamat ng Mangga</a></li>
				<li><a href="alamat8.php">Alamat ng Langaw</a></li>
			</ul>
		</div>
        <?php
            if(isset($_POST['search'])){
            $alamat = $_POST['name'];
                            
            $query1 = "SELECT 'Title' FROM `alamat` WHERE Title LIKE '%$alamat%';";
            $run = mysqli_query($conn, $query);
            };
        ?>
    </body>    
</html>