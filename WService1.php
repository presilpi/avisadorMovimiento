<?php
header('Content-type: application/json');

////// TABLA androidRAUL
$device="0";
Require($_SERVER["DOCUMENT_ROOT"]."/sql.php");
$Clase = new Sql;

		$Sql="Select
			a.*
			From androidRAUL as a
      WHERE deviceId = ".$_REQUEST["device"]."
			";

		$Res = $Clase->Query($Sql);
		if ($Row = $Clase->Fetch($Res))
		{
    $device=$Row["nombre"];
		}	

//if (empty($device))
//$device=0;

$arr = array('nombre' =>$device);

//$arr = array('nombre' => "JUAN DE LA GANDARA");
//$arr = array('nombre' => $_REQUEST["device"]);

echo $_GET['jsoncallback']. '(' . json_encode($arr) . ');';
//echo $_GET['callback']."(".json_encode($arr).");";  
?>
