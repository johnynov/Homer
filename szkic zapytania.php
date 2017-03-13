<?php

/* POKÓJ, NAZWA GNIAZKA, TYP GNIAZDKA (ZDJĘCIE) , STAN

Wybieranie:
cx_room < o chl_room list < ch_room_querry
cx_list < o chl_type list < ch_type_querry
cx_floor < o chl_floor list < ch_floor_querry

$
Sortowanie po filtrze 
*/

//=============================================================
// Stringi querry do PG_QUERRY do 3 list: Floor, Room, Type;
//=============================================================

$ch_room_querry = select room.name from room 
	if ($cx_floor != ''){
		AND floor.name = 'echo $chl_floor'
	}
	if ($cx_type != ''){
		AND socket.type = 'echo $chl_type'
	};

$ch_floor_querry = select floor.fid  from floor
	if ($cx_room != ''){
		AND room.name = 'echo $chl_room'
	}
	if ($cx_type != ''){
		AND socket.type = 'echo $chl_type'
	};

$ch_type_query = select controller.type from controller 
	if ($ch_room != ''){
		AND room.name = ''
		}
	if ($ch_floor != ''){
		AND floor.name = 'echo $chl_floor'
	};


$chl_room = pg_query($dbconn, $ch_room_querry);
$chl_type = pg_query($dbconn, $ch_type_querry);
$chl_floor = pg_query($dbconn, $ch_floor_querry);


while ($row = pg_fetch_row($result)) {
	echo "$row[0]";
	echo "<br />\n";
}


select room.name, socket.name, socket.type, socket.onoff from room, socket where socket.rid = room.rid;
select room.name, socket.name, socket.type, socket.onoff from room, socket where socket.rid = room.rid 
if ($ch_rooms != ''){
	AND room.name = 'echo $ch_room'
}

while ($row = pg_fetch_row($result)) {
	echo "Pass for $usr :: $row[0]";
	echo "<br />\n";
}
if ($ch_floor != ''){
	AND floor.name = 'echo $ch_floor'
}
if ($ch_type != ''){
	AND socket.type = 'echo $ch_type'
};

?>