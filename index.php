<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculatrice.php" method="POST">
        <div class="op1">
            <label for="number1">Nombre 1</label><br>
            <input type="text" name="number1" placeholder="nombre 1">
        </div>
        
        <div class="operator">
            <label for="operator">Operateur</label><br>
            <select id="operator" name="operator">
                <option value="+">+</option>
                <option value="+">-</option>
                <option value="+">/</option>
                <option value="+">*</option>
            </select>
        </div>

        <div class="op2">
            <label for="number2">Nombre 2</label><br>
            <input type="text" name="number2" placeholder="nombre 2">
        </div>

        <input type="submit" value="Calculer">

    </form>
</body>
</html>