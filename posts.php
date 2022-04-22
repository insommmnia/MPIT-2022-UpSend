<?php 
    session_start();
?>
 <?php
        if  ($_SESSION['id'] == "") {
         echo "the page is unavailable";
        }else {
   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/img/fav_ico.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<link rel="stylesheet" href="https://use.typekit.net/hph2pnz.css">
    <title>Проекты</title>
</head>
<style>
    .content__item {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    counter-increment: itemcounter;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.content__item::before {
    color: var(--color-number);
    position: absolute;
    top: 0;
    left: 0;
    content: counters(itemcounter, ".", decimal-leading-zero);
}
</style>
<body>
     <canvas id="canvas" style="position: absolute; z-index: -1 !important" ></canvas>
    <header class="header">
		<div class="container3 header-container">
			<a class="logo">
				<img src="img/logo.png"  style="max-width: 65px; transform: rotate(90deg); " alt="Inso logo">
			</a>
			<div style=" height: 70px; padding-left: 100px; padding-right: 100px;">
			    <div style="margin-top:25px;font-weight: 400">
			        <a href="#" class="link-head" style="margin-left: 30px">Искусство</a>
				    <a href="#" class="link-head" style="margin-left: 30px">Финансы</a>
					<a href="#" class="link-head" style="margin-left: 30px">Одежда</a>
					<a href="#" class="link-head" style="margin-left: 30px">Технологии</a>
					<a href="#" class="link-head" style="margin-left: 30px">Музыка</a>
					<a href="#" class="link-head" style="margin-left: 30px">Игры</a>
					<a href="#" class="link-head" style="margin-left: 30px">Прочее</a>
					</div>
			</div>
			
			<div class="menu-dek" style="margin-top: 0px;">
            <?php if ($_SESSION['id'] != "") {
                                  
            $connect = mysqli_connect("j41406569.myjino.ru","j41406569","nikitka20041616","j41406569");
        $text_query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
        $text_query2 = "SELECT * FROM posts";                           
        $query = mysqli_query($connect, $text_query);
        $con = mysqli_query($connect, $text_query2);  
         $con2 = mysqli_query($connect, $text_query2);  
            $result = $query->fetch_assoc();
            $result3 =  $con2->fetch_assoc(); 
            };
            ?>
                                   
				<div class="menu-dek" style="margin-top: 0px;">
				 <?php
                            if  ($_SESSION['id'] != "1337") {
                            
                ?>  
				
				<div style="background-color: red; max-width: 700px; heigth: 70px" ></div> 
				<a href="#" class="link-head">Профиль</a>
				
				<a href="php/exit.php"><button class="header-btn header-btn-ex">Выйти</button></a>
				<?php
                            }else {
                       
                ?>
                	
				<a href="#" class="link-head">Профиль</a>
				<a href="php/exit.php"><button class="header-btn header-btn-ex">Выйти</button></a>
				<?php }; ?>
				</div>
			</div>
		</div>
	</header>
	<main>
	    
	    
		<section class="service">
			<div class="container" id="events" style="display: block;">
				<h2 class="service-title" style="margin-left: 40px;color: #1f1f1f;" >
					Проекты
				</h2>
				<?php
				
				    if ($result3["id"] == ""){
	 		        
	 	            
	 	            ?>
	 	            <h4 class="service-title" style="color: #1f1f1f;">
					Пока ничего нет
				    </h4>
				   <?php 
				     }else{
				
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
							<?php echo $result2["descr"]; ?>
						</p>
						<p class="service-descr" >
						    Автор:
							<?php echo $result2["author"]; ?>
						</p>
						<p class="service-descr" >
						    Собрано:
						    <div class="w3-light-grey" style="border-radius: 30px">
				                <?php
				                $per = $result2["collected"]/($result2["target"]/100)
				                
				                ?>
				                
				                
                                <div id="myBar" class="w3-container w3" style="height:24px;width:<?php echo $per; ?>%; background-color: #FF4040; border-radius: 30px"></div>
                            </div>
                        <p class="service-descr" >
						    
							<?php echo $result2["collected"]; ?>
							 Из
							<?php echo $result2["target"]; ?>
						</p>
						 
							
							
						</p>
						
							
	 	                 
				           
				            <form method="POST">
				                <input type="hidden" value="<?php echo $result2["id"]  ?>" name='id'>
							    <a type="submit" class="link service-link">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 494.148 494.148" style="enable-background:new 0 0 494.148 494.148;" xml:space="preserve">
								<g>
									<g>
										   <path d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124
										   c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884
										   C432.632,229.572,422.964,213.288,405.284,201.188z"/>
									</g>
								</g>
							</svg>
							<button style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><span type="submit">Пожертвовать</span></button>
					</a>
							
						
						
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
document.getElementById("btnn1").onclick = function(){
    document.getElementById("events").style.display = "block";
    document.getElementById("mar").style.display = "none";
    document.getElementById("pog").style.display = "none";
    
}
document.getElementById("btnn3").onclick = function(){
    document.getElementById("events").style.display = "none";
    document.getElementById("pog").style.display = "none";
    document.getElementById("mar").style.display = "block";
}
document.getElementById("btnn2").onclick = function(){
    document.getElementById("events").style.display = "none";
    document.getElementById("pog").style.display = "block";
    document.getElementById("mar").style.display = "none";
}


let pageWidth = document.documentElement.scrollWidth;
	let pageHeight = document.documentElement.scrollHeight;
	 console.log(pageHeight); 
	let c = init("canvas"),
  w = (canvas.width = pageWidth),
  h = (canvas.height = pageHeight);
class firefly{
  constructor(){
    this.x = Math.random()*w;
    this.y = Math.random()*h;
    this.s = Math.random()*3,2;
    this.ang = Math.random()*2*Math.PI;
    this.v = this.s*this.s/4;
  }
  move(){
    this.x += this.v*Math.cos(this.ang);
    this.y += this.v*Math.sin(this.ang);
    this.ang += Math.random()*20*Math.PI/180-10*Math.PI/180;
  }
  show(){
    c.beginPath();
    c.arc(this.x,this.y,this.s,0,2*Math.PI);
    c.fillStyle="#78b88b";
    c.fill();
  }
}

let f = [];

function draw() {
  if(f.length < 40){
    for(let j = 0; j < 10; j++){
     f.push(new firefly());
  }
     }
  //animation
  for(let i = 0; i < f.length; i++){
    f[i].move();
    f[i].show();
    if(f[i].x < 0 || f[i].x > w || f[i].y < 0 || f[i].y > h){
       f.splice(i,1);
       }
  }
}

let mouse = {};
let last_mouse = {};

canvas.addEventListener(
  "mousemove",
  function(e) {
    last_mouse.x = mouse.x;
    last_mouse.y = mouse.y;

    mouse.x = e.pageX - this.offsetLeft;
    mouse.y = e.pageY - this.offsetTop;
  },
  false
);
function init(elemid) {
  let canvas = document.getElementById(elemid),
    c = canvas.getContext("2d"),
    w = (canvas.width = pageWidth),
    h = (canvas.height = pageHeight);
  c.fillStyle = "rgb(255, 0, 0)";
  c.fillRect(0, 0, w, h);
  return c;
}

window.requestAnimFrame = (function() {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback) {
      window.setTimeout(callback);
    }
  );
});

function loop() {
  window.requestAnimFrame(loop);
  c.clearRect(0, 0, w, h);
  draw();
}

window.addEventListener("resize", function() {
  (w = canvas.width = pageWidth),
  (h = canvas.height = pageHeight+200);
  loop();
});

loop();
setInterval(loop, 1000 / 60);
</script>
</html>
<?php }; ?>