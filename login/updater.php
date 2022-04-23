<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Редактировать профиль</title>
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
				<form method="POST" action="../php/update.php" enctype="multipart/form-data" class="login100-form validate-form flex-sb flex-w" >
				    
				    
					<?php if ($_SESSION['id'] != "") {
                                  
            $connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
        $text_query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
          
        $query = mysqli_query($connect, $text_query);
          
            $user = $query->fetch_assoc();
            
            
            };
            ?>

					<span class="txt1 p-b-11">
						Фото
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Выберите фото">
						
						<div class="form-group mt-3">
           									<label class="mr-2">Загрузить картинку</label>
           									<input type="file" name="img" value="<?php echo $user["img"]; ?>">
            								<input type="hidden" name="img2" value="<?php echo $user["img"]; ?>">
          					</div>
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Имя
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="text" name="name" value="<?php echo $user["name"]; ?>" >
						
					</div>
					<span class="txt1 p-b-11">
						Фамилия
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="text" name="surname" value="<?php echo $user["surname"]; ?>" >
						
					</div>
					<span class="txt1 p-b-11">
						Логин
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="text" name="email" value="<?php echo $user["mail"]; ?>" >
						
					</div>
					<span class="txt1 p-b-11">
						Пароль
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="password" name="pass" value="<?php echo $user["password"]; ?>" >
						
					</div>
					
					<span class="txt1 p-b-11">
						Работа\Должность
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="text" name="work" value="<?php echo $user["work"] ?>" >
						
					</div>
					
					<span class="txt1 p-b-11">
						Навыки
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="text" name="skills" value="<?php echo $user["skills"]; ?>" >
						
					</div>
					
					<span class="txt1 p-b-11">
						О себе
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите пароль">
						
							<input class="input100" type="text" name="descr" value="<?php echo $user["description"]; ?>" >
						
					</div>


					
					  
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Внести изменения
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