<?php 
include("conexion.php");
session_start();

$_SESSION['usuario']= $_POST['usuario'];
$_SESSION['pass'] = $_POST['pass'];


$buscadato = mysqli_query($conn,"SELECT * FROM usuarios_icarplus WHERE Usuario ='".$_SESSION['usuario']."'and Pass = '".$_SESSION['pass']."'")or die(mysqli_error($conn)); //aqui va la consulta
$b = mysqli_num_rows($buscadato);


if($b == 0){
        echo json_encode("error");
}else{echo json_encode("esoooo");}





?>