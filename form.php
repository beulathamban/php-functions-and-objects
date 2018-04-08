<!DOCTYPE html >
<html>
<head>
<title>PHP Form</title>
</head>
<body>
<h1>Thank You</h1>
<p> This is what you have submitted:</p>
<dl>
	<dt>Username</dt><dd><?php echo $_POST["name"]?></dd>
	<br>
	<dt>Places</dt> <br>
	<?php
	if (!empty($_POST["place"])) {
    foreach ($_POST["place"] as $check) {
            echo $check , "<br>" ; 
    	} 
    	//break;
	}else {
		echo "please enter place\n";
	}
?>
<br> <br>
<dt>Result</dt><dd><?php echo $_POST["result"]?></dd><br> <br>


	
</dl>
</body>
</html>