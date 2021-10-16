<?php 
header('Content-Type: application/json; charset=utf-8');
$dir = '../images';
$files  = scandir($dir);
$files = array_diff($files, array('.', '..'));

$bd = new SQLite3('image_qualifier.db');
$results = $bd->query('SELECT * FROM images');
$voted=[];
while ($row = $results->fetchArray()) {
    $voted[]=$row['filename'];
}

$f=array();
foreach($files as $key=>$name){
    if(!in_array($name,$voted))
        $f[]=$name;
}
print json_encode($f);