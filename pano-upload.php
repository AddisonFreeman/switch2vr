<?php
// $pano_name = $_POST["panoname"];
// echo $pano_name; //sanitize to only lowercase dir name
// mkdir(__DIR__ . "/../wp-content/vtour/projects/" . $pano_name);
// //upload entire folder into above directory


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	// $paths = explode("###",rtrim($_POST['paths'],"###"));

	// $path_index_array = []; //array to hold index of filenames from path array
	
	// foreach ($paths as $path) {
	// 	$file_from_path = ltrim(substr($path, strrpos($path, "/")), "/");
	// 	array_push($path_index_array, $file_from_path);
	// }
	echo 'start';
	echo $_FILES['zipTest1']['name'];
    
    // foreach ($_FILES as $i => $file) {
 		// echo $file['name'];
        
   //      if (strlen($_FILES[$i]['name']) > 1) {
   //      	//TODO: filter out hidden files, 

   //      	$file_index = array_search($file['name'], $path_index_array); //find path for given file
   //      	$dir_path = substr($paths[$file_index], 0, strpos($paths[$file_index], $file['name']));	//get just the directory from the current file in

			// if(!is_dir(__DIR__."/../wp-content/vtour/projects/test/".$dir_path)) { //don't make dir if end file
			// 	mkdir(__DIR__."/../wp-content/vtour/projects/test/".$dir_path, 0777, true);
			// 	if (move_uploaded_file($_FILES[$i]['tmp_name'], __DIR__ . "/../wp-content/vtour/projects/test/".$dir_path.$file['name'])) {
   //              	echo 'uploaded '.$file['name'].' at '.'\'wp-content/vtour/projects/test/'.$dir_path.'\'';
   //          	}
			// }


   //      }
    // }
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
