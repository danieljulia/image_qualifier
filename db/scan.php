<?php 
header('Content-Type: application/json; charset=utf-8');
$dir = '../images';
$files  = scandir($dir);
$files = array_diff($files, array('.', '..'));
$f=array();
foreach($files as $key=>$name){
    $f[]=$name;
}
print json_encode($f);