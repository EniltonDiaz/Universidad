<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
function mostrar_titulos($detalle){
	$dbHost='sql307.mipropia.com';
    $dbName='mipc_27165361_phpws';
    $dbUser='mipc_27165361';
    $dbPass='eidc1920435';
	try{
		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo $e->getMessage();
	}
	if($detalle=="lista")
	{
		$resultado=$pdo->query("SELECT titulo FROM libros");
	}
	else{ $resultado=$pdo->query("SELECT titulo FROM libros WHERE id=".$detalle);
	}
	while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
		$todosLosTitulos[]=$fila;
	}
	return $todosLosTitulos;
}
function mostrar_autores($detalle)
{
	$dbHost='sql307.mipropia.com';
    $dbName='mipc_27165361_phpws';
    $dbUser='mipc_27165361';
    $dbPass='eidc1920435';
	try{
		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo $e->getMessage();
	}
	if($detalle=="lista")
	{
		$resultado=$pdo->query("SELECT autor FROM libros");
	}else{
		$resultado=$pdo->query("SELECT autor FROM libros WHERE id=".$detalle);
	}
	while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
		$todosLosTitulos[]=$fila;
	}
	return $todosLosTitulos;
}
function guardar_nuevo_autor(){
	$dbHost='localhost';
	$dbName='phpws';
	$dbUser='root';
	$dbPass='';
	try{  $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo $e->getMessage();
	}
	if(!empty($_POST)){              $autor=$_POST['autor'];           $titulo=$_POST['titulo'];
		
      $sql="INSERT INTO libros (autor,titulo) VALUES (:autor,:titulo)";
      $query=$pdo->prepare($sql);
      $result=$query->execute([
      	'autor'=>$autor , 
      	'titulo'=>$titulo
      ]);
	}
	header('location:../../../');
	exit;
}
if($_GET['peticion']=='titulo')
{
	$resultado= mostrar_titulos( $_GET['detalle'] );
}
else if($_GET['peticion']=='autor')
{
	if($_GET['detalle']=='nuevo'){
		guardar_nuevo_autor();
	}else{
	$resultado= mostrar_autores( $_GET['detalle'] );
    }
}
else
{
	header('HTTP/1.1 405 Method Not Allowed');
	exit;
}
echo json_encode($resultado);
?>