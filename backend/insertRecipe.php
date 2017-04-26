<?php
require "config.php";
require "core/queryFileHelper.php";
require "core/uploadImage.php";

$data = Array(
    "username" => $_POST["username"],
    "description" => $_POST["description"],
    "preparationmethod" => $_POST["preparationmethod"],
    "ingredients" => $_POST["ingredients"],
    "name" => $_POST["name"],
    "suitableforvegetarians" => $_POST["suitableforvegetarians"],
    "spicy" => $_POST["spicy"],
    "skillrequired" => $_POST["skillrequired"],
    "cookingtime" => $_POST["cookingtime_minimum"]." - ".$_POST["cookingtime_maximum"],
    "servers" => $_POST["servers"],
    "image" => ""
);
$data["suitableforvegetarians"] = strtolower($data["suitableforvegetarians"]);
$url = "http://".$_SERVER["SERVER_NAME"].(str_replace("backend/insertRecipe.php", "", $_SERVER["REQUEST_URI"]));
$uri = str_replace($url, "", $_SERVER["HTTP_REFERER"]);

//Check if is a valid recipe and if don`t exist before insert it on database.
if (isValidInput($data) && !checkIfRecipeExist($data["name"])) {
    $pathFile = saveImage();
    $data["image"] = str_replace("/hermes/bosnaweb03b/b661/ipg.healeyislamictrustco/avocado/", "", $pathFile);

    insertRecipe($data);
    header("Location: ${url}");
} else {
    echo (isValidInput($data) ? "Recipe with name '${data["name"]}' already exist." : "Invalid recipe parameters.");
    header("Location: ${url}${uri}");
}

/**
 * Check if is a valid recipe input.
 *
 * @param $data
 * @return bool
 */
function isValidInput($data) {
    //Suitable for vegetarians can be only on or off.
//    $matchVegetariansValidation = $data["suitableforvegetarians"] == "on" || $data["suitableforvegetarians"] == "off";

    //Spicy can be only on or off.
//    $matchSpicy = $data["spicy"] == "on" || $data["spicy"] == "off";

    //Skill required can only be a number from 0 to 10.
    $matchSkillRequired = preg_match("/^([0-9]|10)$/", $data["skillrequired"]);

    //Cooking time can be only [NUMBER] - [NUMBER].
    $matchCookingTime = preg_match("/^(\d{1,}\s-\s\d{1,})$/", $data["cookingtime"]);

    //Servers can only be a number.
    $matchServers = preg_match("/^(\d{1,})$/", $data["servers"]);

    //Check if is a valid user name.
    $isValidUserName = checkIfUserExist($data["username"]);

    return $matchSkillRequired && $matchCookingTime && $matchServers && $isValidUserName;
}

/**
 * Check if other recipe exist in the database with same name.
 *
 * @param $name
 * @return bool
 */
function checkIfRecipeExist($name) {
    $query = getQuery("checkIfRecipeExist.query", $name, "", "", "", "", "", "", "", "", "", "", "");
    $result = mysql_query($query);

    return (mysql_result($result, 0) >= 1);
}

/**
 * Insert the recipe in the database.
 *
 * @param $map
 */
function insertRecipe($map) {
    $datecreation = date("m/d/Y");
    $usernameId = getUserId($map["username"]);
    $usernameId = mysql_result($usernameId, 0);

    $query = getQuery(
        "insertRecipe.query", $map["name"], $usernameId, $datecreation, $map["description"], $map["preparationmethod"],
        $map["ingredients"], ($map["suitableforvegetarians"] == "on" ? 1 : 0), ($map["spicy"] == "on" ? 1 : 0),
        $map["skillrequired"], $map["cookingtime"], $map["servers"], $map["image"]);

    mysql_query($query);
}

/**
 * Check if is a valid username.
 *
 * @param $username
 * @return bool
 */
function checkIfUserExist($username) {
    $map = Array(
        "username" => $username,
        "email" => "%",
        "password" => "%"
    );
    $query = getFileWithParameters("checkIfUserExist.query", $map);
    $result = mysql_query($query);

    return (mysql_result($result, 0) >= 1);
}

/**
 * Get user id in database by name.
 *
 * @param $username
 * @return resource
 */
function getUserId($username) {
    $map = Array(
        "username" => $username
    );
    $query = getFileWithParameters("selectIdUser.query", $map);

    return mysql_query($query);
}

function getQuery($fileName, $name, $username, $datecreation, $description, $preparationmethod, $ingredients, $suitableforvegetarians, $spicy, $skillrequired, $cookingtime, $servers, $image) {
    $map = Array(
        "username" => $username,
        "datecreation" => $datecreation,
        "description" => $description,
        "preparationmethod" => $preparationmethod,
        "ingredients" => $ingredients,
        "name" => $name,
        "suitableforvegetarians" => $suitableforvegetarians,
        "spicy" => $spicy,
        "skillrequired" => $skillrequired,
        "cookingtime" => $cookingtime,
        "servers" => $servers,
        "image" => $image
    );

    return getFileWithParameters($fileName, $map);
}
?>