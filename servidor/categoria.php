<?php
 include_once 'conexao.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

   
    $sql="insert into categoria (nome,descricao) values(:nome,:desc)";
    $prep=$conexao->prepare($sql);
    $prep->bindValue(':nome',$_POST['nome']);
    $prep->bindValue(':desc',$_POST['descricao']);
   if($prep->execute()){
       return header('location:../categoria.php');
   }


}

else{
$sql="select * from categoria";
$prep=$conexao->prepare($sql);
$prep->execute();
$categorias=$prep->fetchAll(PDO::FETCH_ASSOC);
}