<?php
require __DIR__."/../config.php";

$queryCount = "SELECT COUNT(*) FROM users";
$query = "SELECT * FROM users";
$result = mysql_query($query);
$count = mysql_query($queryCount);
$count = mysql_result($count, 0);

if (!$result) {
    echo "<p style='font-weight: 800; padding-bottom: 5px; padding-top: 5px; color: #FFE926; background-color: #96ADB3'>Error executing query <i>SELECT *</i> </p>";
} else {
    echo "<p style='padding-bottom: 5px;'>Number os users: ${count}</p>";
    while($row = mysql_fetch_array($result)) {
        echo "<p style='padding-bottom: 5px;'>User: ${row["username"]}, Password: ${row["md5password"]}, Email: ${row["email"]}</p>";
    }
}

?>