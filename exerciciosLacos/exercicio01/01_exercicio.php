
    <?php
    $nota = $_POST["nota"];
    while($nota<0 || $nota>10){
        echo"A nota digitada $nota, é invalida!!";
        return;
    } 
    echo"A nota digitada $nota, é valida!!";
    
    ?>
    
