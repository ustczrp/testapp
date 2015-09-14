<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>This is just an Azure Web app test!</p>'; 
$serverName = "gr2nwytk2y"; //serverName\instanceName
$connectionInfo = array( "Database"=>"ngdb", "UID"=>"webappdb", "PWD"=>"Mydbpassword123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


?>
 <?php phpinfo(); ?>
 </body>
</html>

