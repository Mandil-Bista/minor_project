<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<body>
<?php require_once('inc/topBarNav.php') ?>
<?php
// require_once('config.php');

//create connection 
// $mysqli = new mysqli($servername, $username, $password, $database);
// if ($mysqli->connect_error) {
//   die("Connection failed: " . $mysqli->connect_error);
// }

if (isset($_POST['submit'])){
  $servername = "127.0.0.1:3307";
  $username = "root";
  $password = "";
  $database = "book_shop_db";
  
  //create connection 
  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->errno)
      die("Connection Failed" . $conn->connect_error);

  $title = $_POST['title'];
  $author = $_POST['author'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $seller_name = $_POST['seller_name'];
  $seller_email = $_POST['seller_email'];

  // Check if an image file has been uploaded
  if(isset($_FILES['image_url']) && $_FILES['image_url']['error'] == UPLOAD_ERR_OK) {
    $target_dir = "seller_uploads/";
    $target_file = $target_dir . basename($_FILES["image_url"]["name"]);
    
    // Check if file already exists
    if (file_exists($target_file)) {
      // File already exists, handle error or generate a unique filename
    }
    
    // Save the file to the specified directory
    if(move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file)) {
      // File was saved successfully
      $image_url = $target_file;
     
    } else {
      // Error saving file
    }
  } else {
    // No image uploaded, handle error or set default image URL
    $image_url = "";
  }

  $stmt = $conn->prepare('INSERT INTO selling_form (title, author, description, price, image_url, seller_name, seller_email) VALUES (?, ?, ?, ?, ?, ? , ?)');
  $stmt->bind_param('sssdsss', $title, $author, $description, $price, $image_url, $seller_name, $seller_email);
  $stmt->execute();
  echo '<meta http-equiv="refresh" content="3; URL=index.php">';
}
?>

<!-- Book Listing Form -->
<div id="alert-toast" class="alert-toast"></div>

<form method="post" action="" enctype="multipart/form-data">
  <label for="title">Title:</label>
  <input type="text" id="title" name="title" required>

  <label for="author">Author:</label>
  <input type="text" id="author" name="author" required>

  <label for="price">Price:</label>
  <input type="number" id="price" name="price" required>

  <label for="seller_name">Your Name:</label>
  <input type="text" id="seller_name" name="seller_name" required>

  <label for="seller_email">Your Email:</label>
  <input type="text" id="seller_email" name="seller_email" required>

  <div class="form-group">
    <label for="image_url">Book Cover:</label>
    <input type="file" id="image_url" name="image_url" required>
  </div>

  <label for="description">Description:</label>
  <textarea id="description" name="description"></textarea>

  <button type="submit"  name="submit">List Book</button>
</form>


<?php require_once('inc/footer.php') ?>
</body>

<style>
  form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: 0 auto;
}

label {
  margin-bottom: 5px;
}

input,
select,
textarea {
  margin-bottom: 15px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button {
  padding: 10px 20px;
  background-color: maroon;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

button:hover {
  background-color: #0062cc;
}

textarea {
  height: 100px;
}


</style>





