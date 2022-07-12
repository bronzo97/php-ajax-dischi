<?php
include "db/db_dischi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <title>INDEX PHP</title>
</head>
<body>
    <div class="container">

    <?php
      foreach ($db as $disco) {
        $img = $disco["poster"];
        $title = $disco["title"];
        $author = $disco["author"];
        $year = $disco["year"]
      ?>
    <ul></ul>
        <li> <img src="<?php echo $img ?>"></li>
        <li><?php echo $title ?></li>
        <li><?php echo $author ?></li>
        <li><?php echo $year ?></li>
    </ul>
      <?php } ?>

    </div>
</body>
</html>