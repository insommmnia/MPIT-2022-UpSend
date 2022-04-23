<?php session_start(); ?>
<?php
   
	$connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
      
	$text_query = "SELECT * FROM goals WHERE id = '{$_POST["postid"]}' ";
	$text_query2 = "SELECT * FROM posts WHERE userid = '{$_POST["userid"]}' ";
 	$query = mysqli_query($connect, $text_query);
 	$query2 = mysqli_query($connect, $text_query2);
 	$result = $query->fetch_assoc();
 	$result2 = $query2->fetch_assoc();
 	
    $col = $result["collected"] + $_POST["money"];
    $col_all = $result2["collected"] + $_POST["money"] + $result["collected"];
    
    
    echo " goal ";
    echo $col;
    echo " all ";
    echo $col_all;
    
    echo " goal ";
    echo $result["collected"];
    echo " all ";
    echo $result2["collected"];

	
  $text_zaprosa_vstavit = "UPDATE goals SET 
                    collected = '{$col}' WHERE id = '{$_POST["postid"]}'";
                    
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  
  $text_zaprosa_vstavit2 = "UPDATE posts SET 
                    collected = '{$col_all}' WHERE userid = '{$_POST["userid"]}'";
                    
  $query_insert2 = mysqli_query($connect, $text_zaprosa_vstavit2);
  

 header('Location: ../profile_user.php?userid='.$_POST["useridd"].''); 
	

	
	
?>