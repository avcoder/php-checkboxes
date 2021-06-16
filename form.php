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
    <input type="checkbox" name="toppings[]" value="cheese"><label>Cheese</label><br/>
    <input type="checkbox" name="toppings[]" value="tomatos"><label>Tomatos</label><br/>
    <input type="checkbox" name="toppings[]" value="sour cream"><label>Sour Cream</label><br/>
    <input type="checkbox" name="toppings[]" value="salsa"><label>Salsa</label><br/>
    <button>Submit</button>
</form>
</body>
</html>