<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title>Form Kepuasan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?= $this->load->view('Template/header')?>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/Gedung-Sate-Trees.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<p class="login100-form-title p-b-41">
					Survey Kepuasan Pelanggan
					Wajib Pajak Kendaraan Provinsi Jawa Barat
				</p>
				
				<form action="<?php echo site_url('Login/c_login/ceklogin'); ?>" method="post" name="Login_Form" class="login100-form validate-form p-b-33 p-t-5">
					<h3 class="p-t-30 p-b-33" align="center">
						Login Form
					</h3>
					<center>
 							
 							<?php
								$info = $this->session->flashdata('info');
								if(!empty($info)){
								echo $info;
								}
							?>
					
					</center>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" required="" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" required="" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	


</body>
</html>