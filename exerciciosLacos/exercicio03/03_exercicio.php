<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO03</title>
</head>
<body>
    <form action="" method="POST">
     Digite o seu nome:   <input type="text" name="nome" minlength="3"><br><br>
       Digite sua idade(1 a 150): <input type="number" name="idade"><br><br>
        Digite o seu salario: <input type="text" name="salario"><br><br>
        Digite o seu gênero(f ou m): <input type="text" name="sexo"><br><br>
        Digite a inicial do seu Estado Civil(s,c,v,d): <input type="text"name="estado_civil"><br><br>
        <input type="submit" value="Validar">
    </form>
    <?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $salario = $_POST["salario"];
    $sexo = $_POST["sexo"];
    $estado_civil = $_POST["estado_civil"];

    while($idade<0 || $idade >150){
        echo"A idade a seguir $idade, é invalida.<br> ";
        return;
        
    }echo"A idade a seguir $idade, é valida<br>";

    while($salario<0){
        echo"O salario a seeguir $salario, é um salario invalido. Digite um salario positivo!!<br>";
        return;

    }echo "O salario a seguir $salario, é um salario valido.<br>";
    while($sexo!="f"&& $sexo!="F" && $sexo!= "m"&& $sexo!= "M"){
        echo "Opção de genero invalida!!<br>";
        
        if($sexo=="f" || $sexo== "F"){
            echo"O genero informado é $sexo - Feminino<br>";
    }else if($sexo=="m"|| $sexo== "M"){
        echo "O genero informado é $sexo - Masculino<br>";
    }else{
        echo"Opção de genero invalida!!";
    }
    return;
}
 
    ?>
</body>
</html>