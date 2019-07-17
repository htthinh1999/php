<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Máy tính cơ bản</title>
<link type="text/css" href=style.css rel="stylesheet" media="screen">
</head>
<body>
<?php 
    $n1        = "";
    $n2        = "";
    $calculate = "";
    $flag      = false;
    
    if(isset($_POST["num1"])&&isset($_POST["num2"])&&isset($_POST["operator"])){
        $n1        = $_POST["num1"];
        $n2        = $_POST["num2"];
        $calculate = $_POST["operator"];
    }
    
    $result = "";
    if(is_numeric($n1)&&is_numeric($n2))
        switch ($calculate){
            case "+":
                $result = $n1 + $n2;
                break;
            case "-":
                $result = $n1 - $n2;
                break;
            case "x":
                $result = $n1 * $n2;
                break;
            case "*":
                $result = $n1 * $n2;
                break;
            case "/":
                if($n2!=0) $result = $n1 / $n2;
                else{
                    $result="Không thực hiện được phép tính!";
                    $flag = true;
                }
                break;
            case ":":
                if($n2!=0) $result = $n1 / $n2;
                else{
                    $result="Không thực hiện được phép tính!";
                    $flag = true;
                }
                break;
            case "%":
                if($n2!=0) $result = $n1 % $n2;
                else{
                    $result="Không thực hiện được phép tính!";
                    $flag = true;
                }
                break;
            default:
                $result = $n1 + $n2;
                $calculate = "+";
                break;
        }
    else{
        $result="Không thực hiện được phép tính!";
        $flag = true;
    }
?>
	<div class="content">
		<h1>Mô phỏng máy tính cơ bản</h1>
		<form name="form-main" method="post" action="#" >
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="num1" value = "<?php echo $n1;?>"/>
			</div>
			<div class="row">
				<span>Số thứ hai</span>
				<input type="text" name="num2" value = "<?php echo $n2;?>"/>
			</div>
			<div class="row">
				<span>Phép toán</span>
				<input type="text" name="operator" value = "<?php echo $calculate;?>" placeholder="+, -, *, /, %, x, :"/>
			</div>
			<div class="row">
				<input type="Submit" value="Giải" name="solve" />
			</div>
			<div class="row">
				<p><?php if($n1!="")
				            if(!$flag) echo "Kết quả: ".$n1." ".$calculate." ".$n2." = ".$result;
				            else echo $result;
				    ?><p>
			</div>
		</form>
	</div>
</body>
</html>