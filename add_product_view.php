<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View added Products > SumanShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://sumanonline.com/Photos/apple-touch-icon.png" type="fevicon">
</head>
<body>
    <div class="container my-3">
        <button class = "btn btn-primary"><a href="add_product.php" class= "text-light" style="text-decoration:none">Add Product</a></button>
        <button class= "btn btn-primary"><a href="index.php" class="text-light" style="text-decoration:none">Go Home</a>
        </button>
<br><br>

        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql = "select * from `items`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['price'];
        echo '

            <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
       <td><button class = "btn btn-secondary"><a href="add_product_update.php?updateid=' . $id . '" class= "text-light">Update</a></button>
       <button class = "btn btn-danger"><a href="#?deleteid=' . $id . '" class= "text-light">Delete</a></button>
    </tr></td>



            ';

    }
}
?>

  </tbody>
</table>
    </div>


</body>
</html>