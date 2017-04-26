<?php
require __DIR__."/../config.php";

/**
 * Save image in the folder for uploads.
 *
 * @return string
 */
function saveImage() {
    $_UPLOADS = $GLOBALS["server_upload_folder"];
    $uploadOk = 1;

    $filePath = $_UPLOADS . basename($_FILES["image"]["name"]);
    $imageFileType = pathinfo($filePath, PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($filePath)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    // If everything is ok, try to upload file
    if($uploadOk == 1) {

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
            return $filePath;
        }
    }
}
?>