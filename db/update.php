<?php 
$points=$_GET['points'];
$filename=$_GET['filename'];
$bd = new SQLite3('image_qualifier.db');

$results = $bd->query("INSERT INTO images (points,filename) values ($points,'$filename')");
