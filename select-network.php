<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="shows.php" method="post">
    <select name="showSelect">
      <?php
      $db = new PDO("mysql:host=172.31.22.43; dbname=Justin200418255", "Justin200418255", "fsQ9DwTT-g");
      $sql = ("SELECT * from networks");
      $comm = $db->prepare($sql);
      $comm->execute();

      $arr = $comm->fetchAll();

      foreach ($arr as $show) {
        echo '<option>' . $show['networkName'] . '</option>';
      }



      ?>
    </select>
    <button>Shows!!</button>
  </form>
</body>

</html>