<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>

<style>
  
    *{
    	font-family: muli;
    }
	
     h1{
     	 font-size: 30px;
     	 color: blue;

     }
     body{
     	  background-color: lightgreen;
     }
     .field{
     	      position: absolute;
     	      left: 50%;
     	      top: 50%;
     	      transform: translate(-50%,-50%);
     	      border-radius: 5px;
     }
     .btn{
     	   width: 270px;
     	   height: 30px;
     	   text-align: center;
     	   background-color:green;
     	   color: white;
     }


</style>


</head>
<body>
	<fieldset class="field" style="width: 250px; height: 250px;">
	<h1>Palindron Checker </h1>

<h4>
	
<?php 
     
     if (isset($_POST['submit'])) {
     	
     	$word = $_POST['palin'];

     	$checker = strrev($word);

     	if ($word === $checker) {
     	 	
     	 	echo "This word is Palindron";
     	 } 
     	 else{
     	 	 echo "No! $word is not palindron ";
     	 }
     }



 ?>


</h4>


<form method="POST" action="">
	<textarea placeholder="Inter your word" cols="35" rows="4" name="palin"></textarea>
	<br>
	<br>
	<input class="btn" type="submit" name="submit" value="Submit">
</form>
</fieldset>

</body>
</html>