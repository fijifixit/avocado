<?php
/**
* Get a query file by name.
*
* @param $fileName
* @return string
*/
function getFile($fileName) {
    $path = "/hermes/bosnaweb11a/b1138/ipg.ibrahimhafijicom/avocado/backend/sql/${fileName}";

    $file = fopen($path, "r") or die("Unable to open file!");
    $text = fread($file, filesize($path));

    fclose($file);

    return $text;
}

/**
 * Get a query file and change the query variables by the values passed with parameters.
 *
 * @param $fileName
 * @param $map
 * @return string
 */
function getFileWithParameters($fileName, $map) {
    $query = getFile($fileName);

    $keys = array_keys($map);
    foreach($keys as $key) {
        $query = preg_replace("/\\$\{$key\}/", "'${map[$key]}'", $query);
    }

    return $query;
}

?>