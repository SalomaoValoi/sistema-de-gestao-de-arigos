<?php
 include_once 'conexao.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

   
    $sql="insert into autor (nome,email,username,senha) values(:nome,:email,:username,:senha)";
    $prep=$conexao->prepare($sql);
    $prep->bindValue(':nome',$_POST['nome']);
    $prep->bindValue(':desc',$_POST['descricao']);
   if($prep->execute()){
       return header('location:../categoria.php');
   }


}

else{
$sql="select * from autor";
$prep=$conexao->prepare($sql);
$prep->execute();
$autores=$prep->fetchAll(PDO::FETCH_ASSOC);
}