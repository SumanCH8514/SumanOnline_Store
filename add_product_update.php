<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "select * from `items` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$price = $row['price'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql = "UPDATE `items` SET name='$name', price='$price' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //   echo "Product Updated Successfully";
        header('location: add_product_view.php');
    } else {
        die(mysqli_error($con));
    }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    />
    <link rel="shortcut icon" href="https://sumanonline.com/Photos/apple-touch-icon.png" type="fevicon">
    <title>Update Product Data > SumanOnline Shop!</title>
  </head>
  <body>
  <div class="container my-3">
      <form method="post">
        <div class="form-group">
          <label>Product Chatagory: </label>
          <select>
            <option value="">Mobile</option>
            <option value="">Laptop</option>
          </select>
        </div>
        <div class="form-group">
          <label>Product Name: </label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Product Name"
            name="name" required value="<?php echo $name ?>"
          />
        </div>

        <div class="form-group">
          <label>Product Price: </label>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Product Price"
            name="price" required value="<?php echo $price ?>"
          />
        </div>
        <button type="submit" class="btn btn-primary" name="submit">
          Update
        </button>
        <button type="submit" class="btn btn-primary" name="submit">
          <a href="add_product_view.php" class="text-light" style="text-decoration:none">Go Back</a>
        </button>
      </form>
    </div>
  </body>
</html>
