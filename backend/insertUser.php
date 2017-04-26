<?php
require "config.php";
require "core/queryFileHelper.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$url = "http://".$_SERVER["SERVER_NAME"].(str_replace("backend/insertUser.php", "", $_SERVER["REQUEST_URI"]));
$uri = str_replace($url, "", $_SERVER["HTTP_REFERER"]);

if ($username && $password && $email) {
    $password = str_replace("\"", "", $password);

    if (!checkIfUserExist($username)) {
        insertUser($username, $password, $email);
    } else {
        echo "User '${username}' with e-mail '${email}' exist";
    }
}

header("Location: ${url}${uri}");

/**
 * Check if don't exist a user already registered,
 * returning 1 if he exist.
 *
 * @param $username
 * @param $email
 * @return bool
 */
function checkIfUserExist($username, $email) {
    $query = getQuery("checkIfUserExist.query", $username, "", $email);
    $result = mysql_query($query);

    return (mysql_result($result, 0) >= 1);
}

/**
 * Insert user in the database.
 *
 * @param $username
 * @param $password
 * @param $email
 */
function insertUser($username, $password, $email) {
    $query = getQuery("insertUser.query", $username, $password, $email);
    mysql_query($query);
}

function getQuery($fileName, $username, $password, $email) {
    $map = Array(
        "username" => $username,
        "password" => $password,
        "email" => $email
    );

    return getFileWithParameters($fileName, $map);
}

?>