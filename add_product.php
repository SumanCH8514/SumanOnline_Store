<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    // $sql = "insert into 'details' (name,email,mobile,pass) values ('$name','$email','$mobile','$pass')";
    $sql = "INSERT INTO `items` (name, price) VALUES ('$name', '$price')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Product Added Successfully";
    } else {
        die(mysqli_error($con));
    }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product > SumanOnline Store</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    />
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
            name="name" required
          />
        </div>

        <div class="form-group">
          <label>Product Price: </label>
          <input
            type="number"
            class="form-control"
            placeholder="Enter Product Price"
            name="price" required
          />
        </div>
        <button type="submit" class="btn btn-primary" name="submit">
          Submit
        </button>

        <button type="button" class="btn btn-primary" name="view">
          <a href="add_product_view.php" class="text-light" style="text-decoration: none"
            >View Products</a
          >
        </button>
        <button type="submit" class="btn btn-primary" name="submit" style="background-color: #036aa6;">
          <a href="index.php" class="text-light" style="text-decoration: none"
            >Back to Home</a
          >
        </button>
      </form>
    </div>
  </body>
</html>
