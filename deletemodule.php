<?php
include "config.php";

$trec = strtolower($_REQUEST['dest']);
$dirname = getcwd()."/".$trec;
$name = ucwords($trec);


// shell_exec("sudo rm -rf ".escapeshellarg($dirname));

$sql = "DELETE FROM navigation where nav='$name'";
$result = mysqli_query($db, $sql) or die(mysqli_error($db));

$sql2 = "DROP TABLE $trec";
$result2 = mysqli_query($db, $sql2) or die(mysqli_error($db));

if ($result && $result2) {
	deleteDir($dirname);
$msg = array('deleteresponse' => 'success','module' => $name,'delete' => $_REQUEST['dest']."/boot.html");
echo json_encode($msg);
}




function deleteDir($path) {
    return is_file($path) ?
            @unlink($path) :
            array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
}
?>