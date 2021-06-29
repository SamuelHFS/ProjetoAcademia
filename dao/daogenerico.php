<?php
include_once ('../bd/conecta.php');
include_once '../model/Pessoa.php';
class daoGenerico{
    public $conn;

    function inserir(Pessoa $p){
    $conn = new Conecta();
    if($conn == true){
        $sql = 'insert into Pessoa values (null, '".$p->getNome().
        "','".$p->getDtNasc()()."')";
    }

}
}
