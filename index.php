<?php


require_once("config.php");


// SELECT SIMPLES
/* $sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

print_r($usuarios); */



$consultaDb = new Usuario();

$consultaDb->loadById(1);

echo $consultaDb('deslogin');

?>