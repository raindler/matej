<!DOCTYPE html>
<html>
<head>
	<title>Objednávka Matěje</title>
</head>
<body>

	<h1>Objednej si Matěje</h1>

	<?php
	/*
	// Inicializace proměnných pro ukládání dat
	$name = $email = $address = "";

	// Pokud byl formulář odeslán, zpracujeme data
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = test_input($_POST["name"]);
	  $email = test_input($_POST["email"]);
	  $address = test_input($_POST["address"]);
	}

	// Pomocná funkce pro ošetření vstupních dat
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	*/
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Jméno:<br>
	  <input type="text" name="name" required>
	  <br>
	  E-mail:<br>
	  <input type="email" name="email" required>
	  <br>
	  Adresa:<br>
	  <input type="text" name="address" required>
	  <br>

	  <input type="submit" name="submit" value="Objednat">
	</form>

	<?php
	/*
	// Pokud byl formulář odeslán, vypišeme potvrzení
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<h2>Potvrzení objednávky:</h2>";
		echo "<p>Jméno: " . $name . "</p>";
		echo "<p>E-mail: " . $email . "</p>";
		echo "<p>Adresa: " . $address . "</p>";
		echo "<h3>Děkujeme že jste si objednali Matěje</h3>"
	}
	*/
	?>

</body>
</html>
