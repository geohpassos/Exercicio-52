<?php

use Dom\Text;
$nome = $_POST["nome"];
$senha = $_POST["senha"];

while ($nome == $senha){

    echo"Tente Novamente, Invalido<br> ";
    
    return;

}
echo"Login Valido, Bem Vindo!!";


?>