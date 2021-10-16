<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div class="container">
  <h1>Image ranking</h1>


  <div class="row">
    <div class="col-md-12">
  <a class="btn-lg btn-primary" role="button" href="qualify.php">Qualify!</a>
</div>
<div class="col-md-12">
  <ul class="list-group">
    <?php 

        $bd = new SQLite3('db/image_qualifier.db');
        $results = $bd->query('SELECT * FROM images order by points desc');
        while ($row = $results->fetchArray()) {
            ?>

        <li class="list-group-item"> <a target="view" href="images/<?php echo $row['filename']?>"><?php echo $row['filename']?> </a>
        <span class="badge badge-primary badge-pill"> <?php echo $row['points']?></span>
      </li>

<?php 
        }
        ?>
</ul>
      </div>

      </div>
      </div>

<?php require "footer.php"?>