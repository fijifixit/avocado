<?php
require "config.php";
require "core/queryFileHelper.php";


$result;
//Return Json with all recipes if exist by ingredient or name, if isn't passed parameter return all recipes.
if ($_GET["ingredient"]) {
    $result = selectRecipesByIngredient($_GET["ingredient"]);
} elseif($_GET["id"]) {
    $result = selectRecipeById($_GET["id"]);
} else {
    $result = selectAllRecipes();
}

//Return a array of Json only if is accessed by the backend address.
if (preg_match("/selectRecipes\.php/", $_SERVER["REQUEST_URI"])) {
    printJsonFromQueryResult($result);
}

/**
 * Select all recipes in database.
 *
 * @return string
 */
function selectAllRecipes() {
    $query = getQuery("selectAllRecipes.query", "", "", "");

    return mysql_query($query);
}

/**
 * Select recipe in database by ingredient.
 *
 * @param $ingredient
 * @return resource
 */
function selectRecipesByIngredient($ingredient) {
    $query = getQuery("selectRecipesByIngredient.query", "", $ingredient, "");

    return mysql_query($query);
}

/**
 * Select recipe in database by name.
 *
 * @param $name
 * @return resource
 */
function selectRecipesByName($name) {
    $query = getQuery("selectRecipesByName.query", "", "", $name);

    return mysql_query($query);
}

/**
 * Select recipe by id in database.
 *
 * @param $id
 * @return resource
 */
function selectRecipeById($id) {
    $query  = getQuery("selectRecipeById.query", $id, "", "");

    return mysql_query($query);
}

/**
 * Return array of json with all result from database.
 *
 * @param $result
 */
function printJsonFromQueryResult($result) {
    //Return empty array if $result is empty.
    if (!$result) echo '';

    $rows = array();

    while($row = mysql_fetch_array($result)) {
        array_push($rows, $row);
    }

    echo json_encode($rows);
}

/**
 * Get Username by Id in the database.
 *
 * @param $id
 * @return resource
 */
function getUsernameById($id) {
    $map = Array(
      "id" => $id
    );

    $query = getFileWithParameters("selectUserNameById.query", $map);
    $result = mysql_query($query);

    return mysql_result($result, 0);
}

function getQuery($fileName, $id, $ingredient, $name) {
    $map = Array(
        "id" => $id,
        "ingredient" => "%${ingredient}%",
        "name" => "%${name}%"
    );

    return getFileWithParameters($fileName, $map);
}

?>
