<?php 

/** run this script to empty the table */

$bd = new SQLite3('image_qualifier.db');
$results = $bd->query("DELETE FROM images WHERE 1");
