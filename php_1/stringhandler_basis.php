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
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string

			 }

			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Jim Koning GD1A</legend>
				 <input type = "text" name = "input1"  placeholder = " string 1"><br>
				 <input type = "text" name = "input2"   placeholder = " string 2"><br>
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
				<ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
					<li class="showSpaces">Ingevoerde string 2:  <?php  echo $input2;  ?> </li>
					<li class="showSpaces">String 1 getrimd trim():  <?php  echo trim ($input1, "abc123!"); ?> </li>
					<li class="showSpaces">String 2 getrimd trim():  <?php  echo trim ($input2, "def456?"); ?> </li>
					<li class="showSpaces">String 3 is de concatenation van string 1 en string 2:  <?php  echo $string3 = $input1.$input2;   ?> </li>
					<li class="showSpaces">De lengte van string 3 is:   <?php  echo strlen($string3);  ?> characters </li>
					<li class="showSpaces">Zoeken naar spaties. Er zit een spatie op positie   <?php echo strpos($string3, " ");     ?> </li>
					<li class="showSpaces">Zoeken naar @. Er zit een @ op positie    <?php echo strpos($string3, "@");     ?> </li>
					<li class="showSpaces">Zoeken naar "." . Er zit een "." op positie     <?php echo strpos($string3, ".");     ?> </li>
					<li class="showSpaces">Zoek naar substring "PHP" vervang dit door "NodeJS" <?php echo str_replace("PHP", "NodeJS", $string3); ?> </li>
					<li class="showSpaces">Wijzig de eerste letter van string 3 naar hoofdletter: <?php echo ucfirst($input1); ?> </li>
					<li class="showSpaces">Alles in hoofdletters: <?php echo strtoupper($input2); ?> </li>
					<br>
					<?php

					if(filter_var($string3, FILTER_VALIDATE_EMAIL)) {

							echo "Dit is een geldig e-mail adres.";
					}
					else {
							echo "Dit is geen geldig e-mail adres.";
					}
					?>
				</ul>
				<hr>
			</div>
	 </body>
</html>
