<?php
//Change the values of variables below with your data.
$_server_name = "localhost";
$_server_username = "root";
$_server_password= "root";
$_server_database_name = "avocado";
$GLOBALS["cookie_pass_name"] = "passkey";
$GLOBALS["cookie_expiry_time"] = 86400; //In seconds, 86400s = 24h.
$GLOBALS["server_upload_folder"] = "C:\Users\Ibrahim\Desktop\UwAmp\UwAmp\www\avocado\backend\uploads";

$connect = mysql_connect($_server_name, $_server_username, $_server_password);
$database = mysql_select_db($_server_database_name, $connect);

if (!$database) {
    die("Connection failed: " . mysql_error());
}
?>
