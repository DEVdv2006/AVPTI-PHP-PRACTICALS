<?php
$target_dir = "uploads/";
    
// Define the target file path
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if the file is an actual image or a fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    // File is an image, proceed with upload
    
    // Check if the file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
    } else {
        // Attempt to move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // File is not an image
    echo "File is not an image.";
}

?>
