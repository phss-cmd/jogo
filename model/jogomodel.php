<?php 

function inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo){
    $query= "INSERT INTO `tbjogos` (`nomejogo`, `valorjogo`, `generojogo`, `qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES ('{$nomejogo} ', '{$valorjogo}', '{$generojogo}', '{$qtdjogo}', '{$datalancamentojogo}', '{$studiojogo}')";
     
    $dados = mysqli_query ($conn,$query);
    return $dados;
}
function visunomeJogos($conn,$nomejogo){
    $query = "select * from tbjogos where nomejogo like '%{$nomejogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

function visucodigoJogos($conn,$codigojogo){
    $query = "select * from tbjogos where idjogo like  '%{$codigojogo}'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

function visugeneroJogos($conn,$generojogo){
    $query = "select * from tbjogos where generojogo like '%{$generojogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}







?>