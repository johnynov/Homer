<!DOCTYPE html>
<html>
<head>
  <title>Much a do-while</title>
</head>
<body>
    <?php
    $dbconn = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
    or die('Nie można nawiązać połączenia');

    $sql = pg_query($dbconn, "SELECT floor.fid FROM floor;");

    while ($row = pg_fetch_row($sql)){
       echo "$row[0]"; 
   }
   ?>
</body>
</html>