<!DOCTYPE html>
<html lang="en">
<head>
	<title>Вход</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="/img/fav_ico.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="">
	
	<div class="limiter">
		
		<div class="container-login100">
			<div class="login-box">
			<div class="login-logo">
				<img src="images/loglogo.png" style=" max-width: 120px;transform: rotate(90deg);" alt="">
			</div>
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="POST" action="../php/login.php" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Вход в аккаунт
					</span>

					<span class="txt1 p-b-11">
						Почта
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Введите почту">
						<input class="input100" type="text" name="email" >
						
					</div>
					
					<span class="txt1 p-b-11">
						Пароль
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
						<input class="input100" type="password" name="pass" >
						
					</div>
					<a  class="txt1">
                                <?php echo "<p style='color:red'>".$_GET['error']."</p>" ?>
                    </a>
					<p>Нет аккаунта? <a href="signin.php" style="color: rgb(255, 93, 64)"> Регистрация</a></p>
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Запомнить меня
							</label>
						</div>

						
					</div>
					  
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Войти
						</button>
					</div>

				</form>
			</div>
		</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>