<?php
////// TABLA androidRAUL
 $device = $_REQUEST["device"];
 $nombre = $_REQUEST["nombre"];


Require($_SERVER["DOCUMENT_ROOT"]."/sql.php");
$Clase = new Sql;

		$Sql="INSERT INTO androidRAUL (deviceId, nombre)  VALUES ('$device',' $nombre')";
    
		if ($Res = $Clase->Query($Sql)){
    $arr=array("resultado"=>"ok");
     echo $_GET['callback']."(".json_encode($arr).");";  
    }
    else{
    $arr=array("resultado"=>"KO");
     echo $_GET['callback']."(".json_encode($arr).");";  
    }
    

?>
