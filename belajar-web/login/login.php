<!DOCTYPE html>
<html>
  <head>
    <title>Login Baru</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="style.css"/>
  
  </head>	
  <body>
  	<center>
  	<a class="navbar-brand" href="index.php"><img src="images/KABAR BAHAGIA.png" class="renponsive" width="55" alt="logo"></a>
  	</center>
	<div class="container">
		<div class="main">
	      <center>
	      <form method="post">
	      	<h3>Silahkan masuk keakun kamu</h3><hr/>
	      	<fieldset style="width: 253px"> 
			<legend>Belum punya akun?<a href="register.php">Daftar di sini</a></legend>

			
			<?php 
				session_start();
				$user="admin";
				$password="admin";
				//$user dan $password adlh sbg patokan, dimana input username dan password harus sama dg yg diatas
				if(isset($_POST['submit']))
				{
					if($_POST['uname']==$user && $_POST['upass'] == $password)
					{
						$_SESSION['loginInfo']=$user;
						echo "<script language='javascript'>alert('Selamat Login Anda Berhasil')</script>";
						echo '<meta http-equiv="refresh" content="0; url=../index.php">';
					}else{
						echo "<script language='javascript'>alert('Login Anda Gagal Coba Lagi Nanti')</script>";
						echo '<meta http-equiv="refresh" content="0; url=login.php">';
					}
				}
			?>
				<label>Username :</label>
				<input id="name" name="uname" placeholder="Masukkan User" type="text"><br><br>
				
				<label>Password :</label>
				<input id="password " name="upass" placeholder="Masukkan Password" type="password"><br><br>
				<center>
					<input type="submit" name="submit" id="submit" value="Masuk">
				</center>
			</fieldset>
		  </form>
		  </center>
		</div>
   </div>
 
  </body>
</html>