<?php
  $servername = "localhost";
  $username = "AppLogin";
  $password = "";

  // MySQL
  $conn = new mysqli($servername, $username, $password);
  // MySQL
  $conn = mysqli_connect($servername, $username, $password);
  // PDO way
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // Oracle
  $conn = oci_connect($username, $password, "//localhost/orcl");
  // MS SQL Server
  $sqlsrvName = "serverName\sqlexpress";
  $sqlsrvConnInfo = array( "Database"=>"myDB", "UID"=>$username, "PWD"=>$password);
  $conn = sqlsrv_connect( $sqlsrvName, $sqlsrvConnInfo);
  // PosgreSQL
  $pgConnInfo = "host=localhost port=5432 dbname=test user=" . $username . " password=" . $password;
  $conn = pg_connect($pgConnInfo);
?>
