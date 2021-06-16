<?php
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

$conn = new PDO('mysql:host=;dbname=albert2', 'root', '');

$sql = "SELECT * FROM orders WHERE order_id=" . $id;

$cmd = $conn->prepare($sql);
$cmd -> execute();
$order = $cmd->fetch();
$order_array = explode(",", $order['toppings']);
// ['cheese', 'tomatos']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<form action="save-form.php" method="post">
    <input type="checkbox" name="toppings[]" <?php echo (in_array("cheese", $order_array) ? 'checked' : ''); ?>><label>Cheese</label><br/>
    <input type="checkbox" name="toppings[]" <?php echo (in_array('tomatos', $order_array) ? 'checked' : ''); ?>><label>Tomatos</label><br/>
    <input type="checkbox" name="toppings[]" <?php echo (in_array('sour cream', $order_array) ? 'checked' : ''); ?>><label>Sour Cream</label><br/>
    <input type="checkbox" name="toppings[]" <?php echo (in_array('salsa', $order_array) ? 'checked' : ''); ?>><label>Salsa</label><br/>
    <button>Submit</button>
</form>
</body>
</html>