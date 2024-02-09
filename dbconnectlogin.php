<?
$servername = 'localhost';
$database = 'cafeteriadb';
$username = 'root';
$password = '';

$conn = msqli_connect($servername, $database, $username, $password);

if(!$conn) {
    die('Connection Failed: ' . msqli_connect_error());
}
echo 'Connected Successfully';
msqli_close($conn);

?>