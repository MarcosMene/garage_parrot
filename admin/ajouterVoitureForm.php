<?php
require_once __DIR__ . "/../lib/config.php";
require_once __DIR__ . "/../lib/session.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/tools.php";
require_once __DIR__ . "/../lib/cars.php";
require_once __DIR__ . "/../lib/carImages.php";
// require_once __DIR__ . "/templates/header-admin.php";

$id = null;
$error = false;
$fileName = null;
$sizeImage = null;
$resImages = null;
$getLastCar = null;

//for security inputs
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$code = $brand = $model = $year = $kilometer = $gearbox = $doors = $price = $color = $fuel = $co2 = '';



$code = test_input($_POST['code']);
$brand = test_input($_POST['brand']);
$model = test_input($_POST['model']);
$year = test_input($_POST['year']);
$kilometer = test_input($_POST['kilometer']);
$gearbox = test_input($_POST['gearbox']);
$doors = test_input($_POST['doors']);
$price = test_input($_POST['price']);
$color = test_input($_POST['color']);
$fuel = test_input($_POST['fuel']);
$co2 = test_input($_POST['co2']);
$file = $_FILES['images']['name'];



if (!$file) {
  echo '<div class="alert alert-danger d-inline" role="alert">Le fichier n\'a pas été uploadé</div>';
  $error = true;
  exit();
}




if ($error == false) {

  //save car information cars table
  $res = saveCar($pdo, $code, $brand, $model, $year, $kilometer, $gearbox, $doors, $price, $color, $fuel, $co2, $id);



  // var_dump($res);

  //verify if a file is sent
  // Handle image uploads
  if (isset($_FILES['images']['tmp_name']) && $_FILES['images']['tmp_name'] != '') {
    $totalImages = count($_FILES['images']['name']);


    for ($i = 0; $i < $totalImages; $i++) {
      $sizeImage = getimagesize($_FILES['images']['tmp_name'][$i]);
      if ($sizeImage !== false) {

        //delete spaces into the name and make name file with lowercase letters
        $fileName = slugify(basename($_FILES['images']['name'][$i]));

        //generate unique ID for a file
        $fileName = uniqid() . '-' . $fileName;

        //move file image into new location (uploads images folder)  

        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], dirname(__DIR__) . _GARAGE_IMAGES_FOLDER_ . $fileName)) {

          if (isset($_FILES['images']['name'][$i])) {

            // $service = getServicesById($pdo, $_SESSION['service']['id']);

            if (file_exists(dirname(__DIR__) . _GARAGE_IMAGES_FOLDER_ . $_FILES['images']['name'][$i])) {
              //delete old image if new one is uploaded
              unlink(dirname(__DIR__) . _GARAGE_IMAGES_FOLDER_ . $_FILES['images']['name'][$i]);
            } else {
              echo '<div class="alert alert-success d-inline" role="alert">image sauvegardé avec success</div>';
            }
          }
          // $resImages = saveCarImages($pdo, $product_id, $image_path);
        } else {
          echo '<div class="alert alert-danger d-inline" role="alert">Le fichier n\'a pas été uploadé</div>';
        }
      }
      // $imageTmpPath = $_FILES['images']['tmp_name'][$i];
      // $imageName = $_FILES['images']['name'][$i];
      // $imagePath = "/uploads/images/" . $imageName; // Assuming uploads/ is a directory for storing images

      // // Move uploaded image to the 'uploads' directory
      // move_uploaded_file($imageTmpPath, $imagePath);

      //get id last car
      $getLastCar = getLastCar($pdo);
      // var_dump($getLastCar['id']);

      //save images inside carimages
      $resImages = saveCarImages($pdo, $fileName, $getLastCar['id']);
    }
  }

  if ($res) {

    echo '<div class="alert alert-success">Le service a bien été sauvegardé.</div>';
  } else {
    echo '<div class="alert alert-danger">Le service n\'a pas été sauvegardé.</div>';

    exit();
  }
}
