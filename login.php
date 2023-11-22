<?php 
include("conexion.php");
session_start();

$_SESSION['usuario']= $_POST['usuario'];
$_SESSION['pass'] = $_POST['pass'];

$buscadato = mysqli_query($conn,"SELECT * FROM usuarios_icarplus WHERE Usuario = '".$_SESSION['usuario']."and Password ='".$_SESSION['pass']."'"); //aqui va la consulta

if($_SESSION['usuario'] === '' || $_SESSION['pass'] === ''){
        echo json_encode("error".$b);
}else{echo json_encode("esoooo");}





?>