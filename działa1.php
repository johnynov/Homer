
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$msg = '';

$dbconn = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
or die('Nie można nawiązać połączenia');

$usr = 'superuser';

$result = pg_query($dbconn, "SELECT rid, name  FROM room;");

while ($row = pg_fetch_row($result)) {
echo "Pass for $usr :: $row[1]";
echo "<select>";
echo "<option value='$row[0]'>$row[1]</option>";
echo "</select>";
echo "<br />\n";
}


?>


<select name="per1" id="per1">
  <option selected="selected">Choose one</option>
  <?php
    foreach($row as $name) { ?>
      <option value="<?= $name['name'] ?>"><?= $name['name'] ?></option>
  <?php
    } ?>
</select> 

<form method="post" action="foreach2.php">
<label for="Property Select" class="title">Select Property</label>  
   <select name="pty_select" > 
   <?php foreach($row as $key => $value){ ?>
                    <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option> 
    <?php } ?>
        </select>
    <input type="submit" name="Submit" />
</form>
<?php

$ch_floor_querry = "SELECT floor.fid FROM floor;";
$chl_room = pg_query($dbconn, $ch_floor_querry);
while ($row = pg_fetch_row($chl_room)){
	echo "option value $row[1]";
	echo "<br />\n";
}

$dbconn = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
or die('Nie można nawiązać połączenia');
$querry = pg_query($dbconn, "SELECT floor.fid FROM floor;");

while ($row = pg_fetch_row($querry)){
	$echo_row = "&lt;option>$row[1]&lt;/option>";
	echo $echo_row;
	echo "</br>";
}
?>

<select name="pty_select" > 
	<?php foreach($row as $key => $value){ ?>
	<option value="<?php echo $value[1]; ?>"><?php echo $value[1]; ?></option> 
	<?php } ?>
	<option value="test">test</option>
</select>

</body>
</html>
