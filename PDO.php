<?php
try{
	$pdoConnect = new PDO('mysql:host=localhost','root','salam');
	//$pdoConnect->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
	echo $e->getMessage();
}