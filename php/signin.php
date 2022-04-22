<?php session_start(); ?>
<?php

	$img_dir = '../imgs/';
	$img_name = $img_dir.basename($_FILES['img']['name']);
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $img_name);

	$connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
      
	$text_query = "SELECT * FROM users WHERE mail = '{$_POST["email"]}' ";
 	$query = mysqli_query($connect, $text_query);
 	$result = $query->fetch_assoc();


	if ($_POST["email"] == $result['mail']) {
		header('Location: ../login/signin.php?error=такой пользователь занят');
	}else{
  $text_zaprosa_vstavit = "INSERT INTO users (name, surname, mail, password,img)
            VALUES
            ('{$_POST["name"]}', 
            '{$_POST["surname"]}',
            '{$_POST["email"]}',
        	'{$_POST["pass"]}',
        	'{$img_name}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  

  header('Location: signin2.php?email='.$_POST["email"].'');
	}

	
	
?>