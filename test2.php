	<?php
	$dbconn = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
	or die('Nie można nawiązać połączenia');
	$querry = pg_query($dbconn, "SELECT floor.fid FROM floor;");
	
	while ($row = pg_fetch_row($querry)){
	echo "&lt;option value='$row[0]'>$row[0]&lt;/option>";
	echo "</br>";

	$db = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
    or die('Nie można nawiązać połączenia');
    $sql = pg_query($dbconn, "SELECT floor.fid FROM floor;");
    while ($row = pg_fetch_assoc($sql)) {
     echo '<option value="'.htmlspecialchars($row[0]).'">mama</option>';}
     pg_close($db);
}
?>