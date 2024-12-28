<?php

include "config.php";


if (isset($_REQUEST["bulkins"]))
{
	$table = $_REQUEST['dest'];
$data = json_decode($_REQUEST['dta']);
$keymain = array_keys((array)$data[0]);

$rtv ='';
foreach($data as $ixor) {
$aix = '';	
	$key = array_keys((array)$data[0]);
  $coma1="'";  
    foreach ($key as $akey) {
    $value = $ixor->$akey;
    $aix .= $coma1.$value."'";
    $coma1=", '";
}

$rtv .= "(".$aix.")".",";
}

$kmain =  "(".implode(", ", $keymain).")";
$rmain = rtrim($rtv, ",");

$sql = "INSERT INTO $table $kmain VALUES $rmain";

$result = mysqli_query($db, $sql) or die(mysqli_error($db));

echo json_encode(array('response'=>true));
}


?>