<?php
// $pano_name = $_POST["panoname"];
// echo $pano_name; //sanitize to only lowercase dir name
// mkdir(__DIR__ . "/../wp-content/vtour/projects/" . $pano_name);
// //upload entire folder into above directory



// $count = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo "start single file upload";
	echo json_encode($_FILES);
	echo "end single file upload";
	// echo("xhr received");
	// echo($_SERVER['HTTP_X_FILENAME']);

	// foreach ($_SERVER as $key => $value) {
	// 	echo($key." : ".$value."; ");
	// }

//     foreach ($_FILES['files']['name'] as $i => $name) {
// 		echo "<p>" . $name . "</p>";
// //         if (strlen($_FILES['files']['name'][$i]) > 1) {
            // if (move_uploaded_file($_FILES['files']['tmp_name'][$i], __DIR__ . "/../wp-content/vtour/projects/" . $pano_name . "/" . $name)) {
// //                 $count++;
// //             }
// //         }
//     }
}

// mkdir(__DIR__ . "/../wp-content/vtour/projects/" . $pano_name);
// $target_dir = __DIR__ . "/../wp-content/vtour/projects/" . $pano_name . "/";
// echo $target_dir;
// $target_file = $target_dir . basename($_FILES["fileToUpload"]['name']);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// // wp_handle_upload( $target_file );

// // // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// // && $imageFileType != "gif" ) {
// //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
// //     $uploadOk = 0;
// // }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
