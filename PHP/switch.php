<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
</head>
<body>
 <h3> Eleições para síndico </h3>   
 <label> Selecione o seu candidato</label>
 <form mathod="post" action="">
     <label> Candidato: </label>
     <select name="candidato">
     <option value="x">[--SELECIONE--]</option>
         <option value="1">Sebastião</option>
         <option value="2">Marta</option>
         <option value="3">Miranda</option>
     </select>
<input type="submit" value="votar" name="voto">
</form>

<?php
switch(inset($_POST['voto'])){
    switch($candidato){
        case($voto == "1");
        echo "Você votou em Sabastião"
    }
}

?>
</body>


//$sql .= "'".$_POST['nome']."',";
$idade = 25;

switch($idade){
  case (idade < 18): echo "Menor de Idade";
}

 $idade = 25;

switch($idade){
    case ($idade < 18): echo "Menor de Idade"; break;
    case ($idade > 18): echo "Maior de Idade"; break;
    default: echo "Está no limbo";
  }


  repetir estrutura php 
</html>