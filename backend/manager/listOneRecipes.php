<?php
require __DIR__."/../config.php";

$id = "";
$query = "SELECT * FROM recipes WHERE id = ${id}";
$result = mysql_query($query);

if (!$result) {
    echo "<p style='font-weight: 800; padding-bottom: 5px; padding-top: 5px; color: #FFE926; background-color: #96ADB3'>Error executing query <i>SELECT</i> </p>";
} else {
    echo "<p style='padding-bottom: 5px;'><b>Number of Recipes:</b> ${count}</p>";
    while($row = mysql_fetch_array($result)) {
        echo "<p style='padding-bottom: 5px;'><b>Recipe:</b> ${row["name"]}</p>";
        echo "<p style='padding-bottom: 5px;'><b>Image:</b> ${row["image"]}</p>";
    }
}

?>