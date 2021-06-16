<?php

$conn = new PDO('mysql:host=;dbname=albert2', 'root', '');

$toppings = $_POST['toppings'];
// ['cheese', 'tomatos']

// foreach($toppings as $topping) {
//     echo $topping . "<br>";
// }

$toppings_array = implode(",",$_POST["toppings"]);
// cheese,tomatos

$sql = "INSERT INTO orders (toppings) VALUES (:toppings)";

$cmd = $conn->prepare($sql);
$cmd -> bindParam(':toppings', $toppings_array, PDO::PARAM_STR, 100);

// execute the command
$cmd -> execute();

// disconnect from the db
$conn = null;


?>