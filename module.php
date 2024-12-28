<?php
$trec = strtolower($_REQUEST['dest']);
$src = getcwd()."/custom";

$dest = getcwd()."/".$trec;

// shell_exec("cp -r $src $dest");
// echo shell_exec("mkdir oorp");
// echo shell_exec("sudo cp -r $src $dest");

// echo "<H3>Copy Paste completed!</H3>";

function xcopy($source, $dest, $permissions = 0755)
{
    $sourceHash = hashDirectory($source);
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        if($sourceHash != hashDirectory($source."/".$entry)){
             xcopy("$source/$entry", "$dest/$entry", $permissions);
        }
    }

    // Clean up
    $dir->close();
    return true;
}

// In case of coping a directory inside itself, there is a need to hash check the directory otherwise and infinite loop of coping is generated

function hashDirectory($directory){
    if (! is_dir($directory)){ return false; }

    $files = array();
    $dir = dir($directory);

    while (false !== ($file = $dir->read())){
        if ($file != '.' and $file != '..') {
            if (is_dir($directory . '/' . $file)) { $files[] = hashDirectory($directory . '/' . $file); }
            else { $files[] = md5_file($directory . '/' . $file); }
        }
    }

    $dir->close();

    return md5(implode('', $files));
}






// $cfi = file_get_contents('side.json');

// $cfi = substr($cfi, 4);
// $endlast = substr($cfi, 0, -1);

// $silt = "{name:'".$_REQUEST['dest']."',url:'".$_REQUEST['dest']."/boot.html'}";
// $Ns = $endlast.",". $silt."]";
// $beij = "tms=". $Ns;



// file_put_contents('side.json', $beij);

include "config.php";

$name = ucwords($trec);
$de = $trec."/boot.html";
$sql = "INSERT INTO navigation (nav, urn) VALUES ('$name', '$de')";
$result = mysqli_query($db, $sql) or die(mysqli_error($db));



$data = $_REQUEST['dta'];
$appname = $trec;

$temparray = json_decode($_REQUEST['dta']);

$sql2 = 'CREATE TABLE '.$appname.' (id INT NOT NULL AUTO_INCREMENT, ';

 foreach($temparray as $field)
    {
        $sql2 .= ' '.$field.' TEXT NULL,';
    }
        $sql2 .= '  created_at DATETIME DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY ( `id` ))';
echo $sql2;
$result2 = mysqli_query($db, $sql2) or die(mysqli_error($db));



xcopy($src, $dest);

if($result && $result2){
    $msg = array('response' => 'success','module' => $name,'created' => $trec."/boot.html");
}else{
    $msg=null;
}

echo json_encode($msg);
?>