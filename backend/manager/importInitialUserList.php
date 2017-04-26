<?php
require __DIR__."/../config.php";

$file = "initialUserList.csv";


if (($handle = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $username = str_replace("'", "''", $data[0]);
        $email = str_replace("'", "''", $data[1]);
        $password = $data[2];

        $queryCheckIfUserExist = "SELECT COUNT(*) FROM users WHERE username = '${username}'";
        $result = mysql_query($queryCheckIfUserExist);

        if (!$result) {
            echo "<p style='font-weight: 800; padding-bottom: 5px; padding-top: 5px; color: #FFE926; background-color: #96ADB3'>Error executing query <i>SELECT COUNT</i> for username: ${username} with password: ${password} and email: ${email}</p>";
            echo mysql_error();
        } else {
            $result = mysql_result($result, 0);
            if (!$result) {
                $queryInsertUser = "INSERT INTO users (username, md5password, email) VALUES ('${username}', md5('${password}'), '${email}')";
                $result = mysql_query($queryInsertUser);

                if(!$result) {
                    echo "<p style='font-weight: 800; padding-bottom: 5px; padding-top: 5px; color: #FA2400; background-color: #96ADB3'>Error executing query <i>INSERT</i> for username: ${username} with password: ${password} and email: ${email}</p>";
                    echo "<p style='background-color: #96ADB3'>".mysql_error()."</p>";
                } else {
                    echo "<p style='font-style: italic; padding-bottom: 5px; color: #0FAE4B'>User: ${username} added in the database</p>";
                }
            } else {
                echo "<p style='font-style: italic; padding-bottom: 5px; color: #262626'> User: ${username} already exist in the database.</p>";
            }
        }
    }
    fclose($handle);
}
?>