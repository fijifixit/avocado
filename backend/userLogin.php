<?php
require "config.php";
require "core/queryFileHelper.php";

$username = $_POST["username"];
$password = $_POST["password"];
$url = "http://".$_SERVER["SERVER_NAME"].(str_replace("backend/userLogin.php", "", $_SERVER["REQUEST_URI"]));
$uri = str_replace($url, "", $_SERVER["HTTP_REFERER"]);

if ($username && $password) {
    $username = str_replace("'", "''", $username);
    $password = str_replace("\"", "", $password);
    $result = checkIfUserExist($username, $password);

    if ($result) {
        setSession($username);
    }

    header("Location: ${url}${uri}");
}

/**
 * Check if user exist, returning 1 if exist.
 *
 * @param $username
 * @param $password
 * @return bool
 */
function checkIfUserExist($username, $password) {
    $query = getQuery("checkIfUserExistAndPassword.query", $username, "%", $password);
    $result = mysql_query($query);

    return (mysql_result($result, 0) >= 1);
}

function checkIfUserExistByName($username) {
    $map = Array(
        "username" => $username
    );

    $query = getFileWithParameters("checkIfUserExistByName.query", $map);
    $result = mysql_query($query);

    return (mysql_result($result, 0) >= 1);
}

function setSession ($username) {
    $userId = mt_rand(1, mt_getrandmax());
    $GLOBALS["userList"][$username] = $userId;

    setcookie($GLOBALS["cookie_pass_name"], "${username}-${userId}", time() + $GLOBALS["cookie_expiry_time"], "/");
}

function getUsernameFromCookie() {
    $name = "";

    if(isset($_COOKIE[$GLOBALS["cookie_pass_name"]])) {
        $key = $_COOKIE[$GLOBALS["cookie_pass_name"]];
        $position = strrpos($key, "-");
        if ($position) {
            $username = substr($key, 0, $position);

            if (checkIfUserExistByName($username)) {
                $name = $username;
            }
        }
    }

    return $name;
}

function getQuery($fileName, $username, $email, $password) {
    $map = Array(
        "username" => $username,
        "email" => $email,
        "password" => $password,
    );

    return getFileWithParameters($fileName, $map);
}

?>