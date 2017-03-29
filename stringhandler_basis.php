<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
				 $input3 =  $_GET['input3']; // input uit html

			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
				 $input3 = ""; //lege string

			 }
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Zet hier jouw naam + klas</legend>
				 <input type = "text" value="<?php echo $input1 ?>" name = "input1"  placeholder = "string 1"><br>
				 <input type = "text" value="<?php echo $input2 ?>" name = "input2"   placeholder = " string 2">
				 <input type = "text" value="<?php echo $input3 ?>" name = "input3"   placeholder = " email">

				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php

			?><ul>
				<li>Ingevoerde string 1:  <?php  echo $input1;?> </li>
				<li>Ingevoerde string 2:  <?php  echo $input2;?> </li>
				<li>String 1 getrimd trim():  <?php echo trim($input1,"1234567890-=!@#$%^&*()_+,./<>?;\:'[''{'']''}'");?> </li>
        <li>String 2 getrimd trim():  <?php echo trim($input2,"1234567890-=!@#$%^&*()_+,./<>?;\:'[''{'']''}'");?> </li>
        <li>String 1 all strtoupper() <?php echo strtoupper($input1);?> </li>
        <li>String 2 all strtoupper() <?php echo strtoupper($input2);?> </li>
        <li>String 1 all strtolower() <?php echo strtolower($input1);?> </li>
        <li>String 2 all strtolower() <?php echo strtolower($input2);?> </li>
        <li>String 1 all ucfirst() <?php echo ucfirst($input1);?> </li>
        <li>String 2 all ucfirst() <?php echo ucfirst($input2);?> </li>
        <li>String 1 all strlen() <?php echo strlen($input1);?> </li>
        <li>String 2 all strlen() <?php echo strlen($input2);?> </li>
        <li>String 1 html str_replace() <?php echo str_replace("html", "php", $input1);?> </li>
        <li>String 2 html str_replace() <?php echo str_replace("html", "php", $input2);?> </li>
        <li>String 3 email detection <?php $email = "$input3";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          echo("$email is a valid email address");
        } else {
          echo("$email is not a valid email address");
        }?> </li>


				</ul>
				<hr>
				<h4>Bonus opdracht: maak code waarmee jij controleert of een input een geldig e-mail adres is</h4>
				<h4>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP</h4>
			</div>
	 </body>
</html>
