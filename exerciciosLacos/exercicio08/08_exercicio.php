<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="POST">
    <input type="text" name="numero1">
    <input type="submit" value="Validar">
    </form>
    <?php
    $numero = $_POST["numero1"];

    for($numero=2; $numero<=5;$numero++){
        echo"Digite o $i numero: <input>";
        echo"<button>";
        
    }
    
    ?>
</body>
</html>