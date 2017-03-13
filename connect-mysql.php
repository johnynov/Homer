<?php

define ('DB_USER', 'jwieczorek');
define ('DB_PSWD', 'ListopAD9..');
define ('DB_HOST', 'loclahost/homer');
define ('DB_NAME', 'homer');

$dbconn = pg_pconnect (host=DB_HOST user=DB_USER password=DB_PSWD dbname=DB_NAME);

?>