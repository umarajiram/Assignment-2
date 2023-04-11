<?php

require_once("db_conn.php");

$query = "select * from product";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<nav class="navbar navbar-expand-xl navbar-white bg-warning">
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
            <a class="dropdown-item" href="add_category.php">add</a>
            <a class="dropdown-item" href="viewCategory.php">view all</a>
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


<body class="bg-primary">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="display-9 text-center"> <b>All product details</b
                        ></h2>
                    </div>
                   <div class="card-body "style="width:100%">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-light">
                                <th>Sl No</th>
                                <th>Product name</th>
                                <th>Cost</th>
                                <th>Selling-Cost</th>
                                <th>Quantity</th>
                                <th>Model Number</th>
                                <th>product image</th>
                                <th>Product Description</th>
                                <th>Product sub-Description</th>
                                <th>edit</th>
                                <th>delete</th>
                                <th>view product</th>
                            </tr>
                            <tr>
                                <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    
                                    $UserID = $row['id'];
                                    $product = $row['productna']; 
                                    $cost = $row['cost']; 
                                    $sellingCost = $row['sellingCost'];
                                    $quantity = $row['quantity']; 
                                    $model = $row['model'];
                                    $image = $row['image'];
                                    $description = $row['description']; 
                                    $sub_description=$row['subDescription'];
                                ?>
                                       
                                <td> <?php echo $row['id'];?></td>
                                
                                <td> <?php echo $row['productna'];?></td>

                                <td> <?php echo $row['cost'];?></td>

                                <td> <?php echo $row['sellingCost'];?></td>

                                <td> <?php echo $row['quantity'];?></td>

                                <td> <?php echo $row['model'];?></td>

                                <td> 
                                  <img src="<?php echo"images/". $row['image'];?>" alt="" width="40px" height="40px">
                                </td>

                                <td> <?php echo $row['description'];?></td>

                                <td> <?php echo $row['subDescription'];?></td>
                                
                                <td><a href="editProduct.php?GetID=<?php echo $UserID ?>" class="btn btn-primary">edit</a></td>
                                
                                <td><a href="deleteProduct.php?Del=<?php echo $UserID ?>" class="btn btn-danger">Delete</a></td>
                                
                                <td><a href="viewProduct.php?GetID=<?php echo $UserID ?>" class="btn btn-success">view</a></td>
                            </tr>
                               
                               <?php

                                }
                                ?> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>