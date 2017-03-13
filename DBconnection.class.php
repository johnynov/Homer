<?php

class DBConnection{
   function DBconnection(){
         var conne

         $host = '192.168.1.122';
         $name = 'Homer';
         $user = 'postgres';
         $password  = 'postgres';
         $port = '5432';

         $pq_querry

         $dbconn = pg_connect("host='192.168.1.122' dbname='Homer' user='postgres' password='postgres' port='5432'")
         or die("Nie można nawiązać połączenia: " . pg_last_error());

         if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

            if ($_POST['username'] == 'tutorialspoint' && 
               $_POST['password'] == '1234') {
               $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = '$activeuser';

            echo 'You have entered valid use name and password';
         } else {
            $msg = 'Wrong username or password';
         }
      }
   }
   ?>