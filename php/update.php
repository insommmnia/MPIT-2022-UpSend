<?php session_start(); ?>
<?php
    if ($_POST["img"] == ''){
            $img_name = $_POST["img2"];
    } else { 
	$img_dir = '../imgs/';
	$img_name = $img_dir.basename($_FILES['img']['name']);
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $img_name);
    };
	$connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
      
	$text_query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}' ";
 	$query = mysqli_query($connect, $text_query);
 	$result = $query->fetch_assoc();


	
  $text_zaprosa_vstavit = "UPDATE users SET 
                    name = '{$_POST["name"]}', 
                    surname = '{$_POST["surname"]}', 
                    img = '{$img_name}',
                    mail = '{$_POST["email"]}',
                    password = '{$_POST["pass"]}',
                    work = '{$_POST["work"]}',
                    skills = '{$_POST["skills"]}',
                    description = '{$_POST["descr"]}'
                    
                    WHERE id = '{$_SESSION['id']}'";
                    
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  

  header('Location: ../profile.php');
	

	
	
?>