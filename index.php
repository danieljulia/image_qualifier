<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  <h1>Image ranking</h1>

  <a href="qualify.php">Qualify!</a>
  <ul>
    <?php 

        $bd = new SQLite3('db/image_qualifier.db');
        $results = $bd->query('SELECT * FROM images order by points desc');
        while ($row = $results->fetchArray()) {
            ?>

        <li> <?php echo $row['points']?> - <?php echo $row['filename']?> </li>

<?php 
        }
        ?>
</ul>
  </body>
</html>