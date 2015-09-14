<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>This is just an Azure Web app test!</p>'; 

$server = "gr2nwytk2y.database.windows.net,1433";
$username = "webappdb@gr2nwytk2y";
$password = "Mydbpassword123";
$database = "ngdb";
try
{
    $conn = new PDO("sqlsrv:server=$server ; Database = $database", $username, $password);
}
catch(Exception $e)
{
    die(print_r($e));
}






?>
 <?php phpinfo(); ?>
 </body>
</html>

