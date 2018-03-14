<?php 
require("../modelo/notaModel.php");

$id_cate=$_POST['categoria'];
$nota=$_POST['nota'];

echo $nota."  ".$id_cate;

$sql="INSERT INTO nota (id_cate,nota) VALUES ('$id_cate','$nota')";
$obj=new metodos();
$resul=$obj->insertar($sql);

echo "<script> window.location.href='../index.php'; </script>";

 ?>
