<?php 
	 $readystate = $_POST["ready_state"];
	
	  echo $readystate;
		
	?>

<html>
<head>
<title> </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body>
<section style="width:400px;">
<div style="background:#ddd;color:#000000;text-align:center;padding:5px;">
<h4>Ajax</h4>
</div>
<div style="border:1px solid #000000;height:200px;">
<p><b>Ajax states:</b></p>
</div>
<div style="border:1px solid #000000;height:100px;color:#777;">
<p><b>when 200 state:(Output)</b></p>
</div>
<form method="post" action="index.php" >
<input type="text" name="ready_state" class="ready_state" value="1" />
<button type="submit" >submit</button>
</form>
</section>
</body>
</html>