<!Doctype html>
<html>
<head>

</head>
  <title>Test Some Stuff</title>
<body>
<?php
  $con = mysql_connect('localhost','root','');
  $db = mysql_select_db('game');

  if($con) {
    echo 'Sucesfully connected to database ..';
  } else {
      die('Error, could not connect!');
  }

  if($db) {
    echo 'Sucesfully found the database ..';
  } else {
      die('Error! Database could not be found!');
  }
 ?>
 <br><br>
 <?php
  $query = mysql_query("SELECT * FROM players");
  // Check select query ran, if not kill db
  if ($query === false)  {
    die('Error in select query');
  }  while($row = mysql_fetch_array($query)) {
    $id = $row['id'];
    $name = $row['name'];

    echo $id .  ': ' . '<b>'.$name.'</b>' . '<br />';
  }
  ?>
</body>
</html>
