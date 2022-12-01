<?php

$dbname="artigos";
$user="root";
$password="";
$conexao;

try{
$conexao=new PDO("mysql:host=localhost; dbname={$dbname}",$user,$password);
}
catch(PDOException $e){
  echo 'Erro ao conectar a base de dados <br> '.$e->getMessage();
}