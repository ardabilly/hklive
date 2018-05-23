<?php
   $host        = "host=localhost";
   $port        = "port=5432";
   $dbname      = "dbname=cctv";
   $credentials = "user=postgres password=123456";

   $conn = pg_connect( "$host $port $dbname $credentials" ) or die('failed') ;

?>