
<!DOCTYPE html>
<html>
	<head>
		<title>Test bazy danych</title>
		<style>
			@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700);

			body
			{
				background: #88888F5;
				text-align: center;
				font-family: Ubuntu;
			}

			h1
			{
				color: #444;
				text-shadow: 0px 0px 2px #444;
			}

			.description
			{    
				color: #777;
				margin-top: -25px;
				margin-bottom: 20px;
				display: block;
			}

			.styled-select
			{
				width: 120px;
				display: inline-block;
				border-radius: 5px;
				position: relative;
				overflow: hidden;
				cursor: pointer;
				background: #f8f8f8;
				border: 2px solid #777;
				box-shadow: 0px 0px 3px 1px #AAA;
				font-family: Ubuntu;
				margin: 0px 5px;
			}

			.styled-select:before, .styled-select:after
			{
				content: '';
				font-size: 6px;
				font-family: Arial;
				display: block;
				position: absolute;
				color: #444;
				right: 6px;
				pointer-events: none;
			}

			.styled-select:before
			{
				top: 8px;
				content: '\25B2';
			}

			.styled-select:after
			{
				top: 14px;
				content: '\25BC';
			}

			.styled-select select
			{
				font-family: Ubuntu;
				width: calc(100% + 20px);
				border: none;
				background: transparent;
				padding: 5px 2px;
				color: #444;
				cursor: pointer;
			}

			/* ----------- */
			/* Dark styles */
			/* ----------- */

			.styled-select.dark
			{
				border-color: #CCC;
				background: #444;
				color: #FFF;
			}

			.styled-select.dark:before, .styled-select.dark:after
			{
				color: #FFF;
			}

			.styled-select.dark select
			{
				background: #444;
				color: #FFF;
			}

			/* --------------- */
			/* Arrows 2 styles */
			/* --------------- */

			.styled-select.arrows2:before, .styled-select.arrows2:after
			{
				font-size: 7px;
				font-weight: bold;
				transform: rotate(-90deg);
			}

			.styled-select.arrows2:before
			{
				content: '>';
			}

			.styled-select.arrows2:after
			{
				content: '<';
			}

		</style>
	</head>
	<body>
		<?php
		$msg = '';

		$dbconn = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
			or die('Nie można nawiązać połączenia');

		$usr = 'superuser';

		$result1 = pg_query($dbconn, "SELECT rid, name  FROM room;");
		$result2 = pg_query($dbconn, "SELECT floor, name  FROM floor;");
		$result3 = pg_query($dbconn, "SELECT name,type  FROM socket;");
		?>

		<?php
		echo"<span class='styled-select dark'>";
		echo "<select name='floor'>";
		//echo "<option value='none3'>reset</option>";
		while ($row2 = pg_fetch_row($result2)) {
			echo "<option value='$row2[1]'>$row2[1]</option>";
		}
		echo "</select>";
		echo"</span>";
		?>

		<?php
		echo"<span class='styled-select dark'>";
		echo "<select name='floor'>";
		//echo "<option value='none3'>reset</option>";
		while ($row1 = pg_fetch_row($result1)) {
			echo "<option value='$row1[1]'>$row1[1]</option>";
		}
		echo "</select>";
		echo"</span>";
		?>

		<?php
		echo"<span class='styled-select dark'>";
		echo "<select name='device_type'>";
		//echo "<option value='none3'>reset</option>";
		while ($row3 = pg_fetch_row($result3)) {
			echo "<option value='$row3[1]'>$row3[1]</option>";
		}
		echo "</select>";
		echo"</span>";

		?>
		
		<h1>mama</h1>
	</body>
