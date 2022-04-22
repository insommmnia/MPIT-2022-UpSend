<!DOCTYPE html>
<html lang="en">
<head>
	<title>Добавить Цель</title>
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login-box"  style="max-width: 900px">
				<div class="login-logo">
					<img src="images/loglogo.png" style=" max-width: 120px;transform: rotate(90deg);" alt="">
				</div>
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="POST" enctype="multipart/form-data" action="../php/addgoal.php" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Добавить цель
					</span>

					<span class="txt1 p-b-11">
						Название
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Введите название">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Описание
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите описание">
						
						<input class="input100" type="" name="descr" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Фото
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Выберите фото">
						
						<div class="form-group mt-3">
           									<label class="mr-2">Загрузить картинку</label>
            								<input type="file" name="img">
          					</div>
						<span class="focus-input100"></span>
					</div>
					
					   

                    <span class="txt1 p-b-11">
						Цель сбора(в рублях)
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Введите сумму сбора">
						
						<input class="input100" type="" name="target" >
						<span class="focus-input100"></span>
					</div>

                    
                    
					<div class="flex-sb-m w-full p-b-48">
	
						
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Добавить
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