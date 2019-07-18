<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Vẽ Tam Giác</title>
<link type="text/css" href=style_02.css rel="stylesheet" media="screen">
</head>
<body>
	<div class="content">
		<h1>Vẽ Tam Giác</h1>
		<ul>
			<li><a href="L06-02-VeTamGiac.php?type=1"><img src="image/1.jpg"></a></li>
			<li><a href="L06-02-VeTamGiac.php?type=2"><img src="image/2.jpg"></a></li>
			<li><a href="L06-02-VeTamGiac.php?type=3"><img src="image/3.jpg"></a></li>
		</ul>
		<div>
			<?php 
			     $type="";
			     if(isset($_GET["type"])&&is_numeric($_GET["type"])){
			         $type=$_GET["type"];
			         switch ($type){
			             case 1:
			                 for($i=0; $i<6;$i++){
			                     for($j=0; $j<=$i; $j++)
			                         echo "*";
			                     echo "<br>";
			                 }
			                 break;
			             case 2:
			                 $i=5;
			                 while($i>=0 && $i<6){
			                     echo str_repeat("*", $i+1);
			                     echo "<br>";
			                     $i--;
			                 }
			                 break;
			             case 3:
			                 $i=1;
			                 while ($i>0 && $i<=6){
			                     echo str_repeat("&nbsp&nbsp", 6-$i);
			                     echo str_repeat("*", 2*$i-1);
			                     echo "<br>";
			                     $i++;
			                 }
			                 break;
			         }
			     }
			?>
		</div>
	</div>
</body>
</html>