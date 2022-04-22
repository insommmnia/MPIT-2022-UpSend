<?php 
    session_start();
?>
 <?php
        if  ($_SESSION['id'] != "2") {
         echo "the page is unavailable";
        }else {
   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/img/fav_ico.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	
    <title>Админ Панель</title>
</head>
<body>
    <?php if ($_SESSION['id'] != "") {
                                  
            $connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
        $text_query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
        $text_query2 = "SELECT * FROM suggests";                           
        $query = mysqli_query($connect, $text_query);
        $con = mysqli_query($connect, $text_query2); 
         $con2 = mysqli_query($connect, $text_query2);
            $result = $query->fetch_assoc();
            $result3 = $con2->fetch_assoc();
            };
            ?>
	<main>
		<section class="service">
			<div class="container">
				<h2 class="service-title">
					Предложенные проекты
				</h2>
				<?php 
				if ($result3["id"] == ""){
				
				?>
				<div style="display: flex">
				<p class="service-title" style="color: #1f1f1f; font-size: 25px; margin-bottom:30px;">
					       Пока ничего нет
        				</p>
        		<img src="../img/sad.gif" style="height: 50px; width:50px; margin-left: 10px;">
        		</div>
        		<?php
			     	}  else{
        		?>
				<ul class="service-list list-reset">
                <?php 
	 		
	 		        for($i=0;$i<$con->num_rows;$i++){
	 		        $result2 = $con->fetch_assoc(); 
	 		         
	 		         
	 		           ?>     
	 		           
	 		       
	 	           
					  <li class="service-item">
						<h3 class="service-subtitle" >
							<?php echo $result2["name"]; ?>
						</h3>
						<div style="background-image: url('	<?php echo $result2['img']; ?> '); background-size: cover; background-repeat: no-repeat;background-position: center; height: 240px; width: 100%; "> 
					
                        </div>
                        <div style="height: 30px; width: 30px;"></div>
						<p class="service-place">
						    Описание:
							<?php echo $result2["description"]; ?>
						</p>
						<p class="service-descr" >
						    Автор:
							<?php echo $result2["author"]; ?>
						</p>
						<p class="service-descr" >
						    Цель сбора:
							<?php echo $result2["target"]; ?>
						</p>
						
			
				           
				            <form method="POST" action="php/addprojectmain.php" enctype="multipart/form-data">
				                <h3>Редактировать</h3>
				                <input type="" value="<?php echo $result2["id"]  ?>" name='id'>
				                <input type="" value="<?php echo $result2["userid"]  ?>" name='userid'>
				                <input type="" value="<?php echo $result2["author"]  ?>" name='author'>
				                <input type="" value="<?php echo $result2["description"]  ?>" name='descr'>
				                <input type="hidden" value="<?php echo $result2["img"]  ?>" name='img' type="file">
				                <input type="" value="<?php echo $result2["target"]  ?>" name='target' >
				                	
							    <button class="header-btn header-btn-log" type="submit">Опубликовать</button>
							
						
						
						</form>
					</li>
					<?php }; ?>
					
				
				</ul>
				<?php }; ?>
			</div>
		</section>
	</main>
</body>
<script>



</script>
</html>
<?php  }; ?>