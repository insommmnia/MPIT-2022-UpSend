<?php session_start(); ?>
<?php

	$connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
      
	$text_query = "SELECT * FROM users WHERE mail = '{$_POST["email"]}' AND password = '{$_POST["pass"]}'";
 	$query = mysqli_query($connect, $text_query);

 	$result = $query->fetch_assoc();

 	if (mysqli_num_rows($query) > 0) {
 		$_SESSION['id'] = $result['id'];
 		header('Location: ../posts.php');
    }else{
        header('Location: ../login/login.php?error=неверно введен логин или пароль');
    }

?>