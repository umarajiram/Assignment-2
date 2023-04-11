<?php 
require_once("db_conn.php");
$UserID = $_GET['GetID'];
$query = "select * from category where id='".$UserID."'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $UserID = $row['id'];
    $product_category = $row['product_category'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Category</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

</head>
<body>
<nav class="navbar navbar-expand-xl navbar-white bg-warning ">
      <a class="navbar-brand" href="#">Electricals </a>
      <img src="images/light.png" alt="" style="width: 50px;, height: 50px;">
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="product.php">Products</a>
            <a class="dropdown-item" href="add_product.php">Add Product</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="add_category.php">Add</a>
            <a class="dropdown-item" href="viewCategory.php">View all</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product Sub-Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="add_subcategory.php">Add</a>
            <a class="dropdown-item" href="viewSubCategory.php">View all</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change-password.php">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container ">

<div class="row"> 

   <div class="col-lg-8 col-lg-offset-2"> 

        <h1>Add product Category</h1>

        <form method="post" action="updateCategory.php?ID=<?php echo $UserID ?>">
            
            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Product Category *</label>
                            <input id="form_product_category" type="text" name="product_category" class="form-control" placeholder="Please enter product category name*" required="required" data-error="product category name is required." value="<?php echo $product_category?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                   
                </div>

                    <div class="col-md-12">
                      <input type="submit" name="update" class="btn btn-success btn-send" value="update">
                    </div>
                </div>
               
            </div>

        </form>
</div>
</div>
</div>
</body>
</html>