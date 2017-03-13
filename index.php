<!DOCTYPE html>
<html>
	<head>
		<title>Home.r  :: user</title>
		<link href="styles.css" type=text/css rel=stylesheet />
		<link href="table.css" type=text/css rel=stylesheet />
		<link href="toggle2.css" type=text/css rel=stylesheet />


		<style type="text/css">


			body {
				background-image: url("mama.jpg");
			}

			h3 {
				font-family: "myriad-pro",sans-serif;
				text-align: center;
				font-size: 170%;
				color: #000000;
			}

			h2 {
				font-family: "myriad-pro",sans-serif;
				text-align: center;
				font-size: 120%;
				color: #1a237e;
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
				font-family: "myriad-pro",sans-serif;
				margin: 0px 5px;
			}

			.styled-select:before, .styled-select:after
			{
				content: '';
				font-size: 6px;
				font-family: "myriad-pro",sans-serif;
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
				font-family: "myriad-pro",sans-serif;
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

		<h3> -- Homer -- </h3>
		<h2 style="font-weight: bold">panel sterowania</h2>

		<table class="table-fill">
			<thead>
				<tr>
					<th class="text-left">Room</th>
					<th class="text-left">Socket</th>
					<th class="text-left">State</th>
				</tr>
			</thead>
			<tbody class="table-hover">
				<tr>
					<td class="text-left">Living Room</td>
					<td class="text-left">Lamp</td>
					<td class="text-left">
						<div class="switch2">
							<input type="checkbox" name="toggle">
							<label for="toggle"><i></i></label>
							<span></span>
						</div>
					</td>
				</tr>

			<tbody class="table-hover">
				<tr>
					<td class="text-left">Stairs 1st floor</td>
					<td class="text-left">Floor LED laps</td>
					<td class="text-left">
						<div class="switch2">
							<input type="checkbox" name="toggle">
							<label for="toggle"><i></i></label>
							<span></span>
						</div>
					</td>
				</tr>

			<tbody class="table-hover">
				<tr>
					<td class="text-left">Kitchen</td>
					<td class="text-left">Cooking fan</td>
					<td class="text-left">
						<div class="switch2">
							<input type="checkbox" name="toggle">
							<label for="toggle"><i></i></label>
							<span></span>
						</div>
					</td>
				</tr>
		</table>

		<form action="demo_form.asp">
			<div class="switch2">
				<input type="checkbox" name="toggle">
				<label for="toggle"><i></i></label>
				<span></span>
			</div>
		</form>

		<?php
		$msg = '';

		$dbconn = pg_connect ("host=localhost dbname=Homer user=postgres password=postgres")
			or die('Nie można nawiązać połączenia');

		$usr = 'superuser';

		$result1 = pg_query($dbconn, "SELECT rid, name  FROM room;");
		$result2 = pg_query($dbconn, "SELECT fid, name  FROM floor;");
		$result3 = pg_query($dbconn, "SELECT name,type  FROM socket;");

		echo"<span class='styled-select dark'>";
		echo "<select name='floor'>";
		while ($row2 = pg_fetch_row($result2)) {
			echo "<option value='$row2[1]'>$row2[0] :: $row2[1]</option>";
		}
		echo "</select>";
		echo"</span>";

		echo"<span class='styled-select dark'>";
		echo "<select name='floor'>";
		while ($row1 = pg_fetch_row($result1)) {
			echo "<option value='$row1[1]'>$row1[1]</option>";
		}
		echo "</select>";
		echo"</span>";

		echo"<span class='styled-select dark'>";
		echo "<select name='device_type'>";
		while ($row3 = pg_fetch_row($result3)) {
			echo "<option value='$row3[1]'>$row3[1]</option>";
		}
		echo "</select>";
		echo"</span>";

		?>
	</body>
</html>