<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<table>
  <thead>
    <th>showName</th>
    <th>firstYear</th>
    <th>networkName</th>
  </thead>
  <tbody>

    <body>
      <?php
      $networkName = $_POST['showSelect'];
      $db = new PDO("mysql:host=172.31.22.43; dbname=Justin200418255", "Justin200418255", "fsQ9DwTT-g");
      $sql = ("SELECT * FROM shows WHERE networkName = :networkName");
      $var = $db->prepare($sql);
      $var->bindParam(":networkName", $networkName, PDO::PARAM_STR, 50);
      $var->execute();

      $arr = $var->fetchAll();

      foreach ($arr as $val) {
        echo "<tr>" .
          "<td>" . $val['showName'] . "<td>" .
          "<td>" . $val['firstYear'] . "<td>" .
          "<td>" . $val['networkName'] . "<td>"
          . "</tr>";
      }
      $db = null;
      ?>
  </tbody>
</table>
</body>

</html>