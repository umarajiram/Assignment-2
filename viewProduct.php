<?php 
require_once("db_conn.php");
$UserID = $_GET['GetID'];
$query = "select * from product where id='".$UserID."'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $UserID = $row['id'];
    $product = $row['productna']; 
    $cost = $row['cost']; 
    $selling_price = $row['sellingCost'];
    $quantity = $row['quantity']; 
    $model = $row['model']; 
    $category = $row['category'];
    $sub_category = $row['sub_category'];
    $image = $row['image'];
    $description = $row['description'];
    $sub_description = $row['subDescription'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view the product</title>

    <link rel="stylesheet" href="style1.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        
</head>
<body>
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
          <a class="nav-link" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="bg-light py-4">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="shadow">
                <img src="<?php echo"images/".$image;?>" alt="product image" style="height:100%; width:100%;">    
            </div> 
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 ">
            <h2 class="fw-bold"> <b><?php echo $product?></b>(<span class><?php echo $model?></span>)</h2>
            <hr>
            <h4>Sub-description</h4>
            <p><?php echo $sub_description?></p>
            <hr>
            <div class="col-md-6">
                <h4>Rs. <span class="text-success fw-bold"><?php echo $selling_price?>.00</span></h4>
            </div>
            <div class="col-md-6">
            <h4>Rs. <s class="text-danger fw-bold"><?php echo $cost?>.00</s></h4>
            </div>

            <div class="row ">
                <div class="col-md-4">
                    <input type="number" value="number" placeholder="enter the no">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <button class="btn btn-danger px-4"><i class="fa fa-shopping-cart me-2"></i>   Add to cart</button>
                </div>
                
                <div class="col-md-6">
                    <button class="btn btn-success px-4"><i class="fa fa-heart me-2"></i>  Add to wishlist</button>
                </div>
            </div>
            <hr>
            <h3>Product description</h3>
            <h4><?php echo $description?></h4>
        </div>
    </div>
  </div>
</div>



<!-- 
<div class="container">

<div class="row"> 

    <div class="col-lg-8 col-lg-offset-2">

        <h1>edit the products</h1>

        <form method="post" action="updateProduct.php?ID=<?php echo $UserID ?>">
            
            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product_name *</label>
                            <input id="form_name" type="text" name="productna" class="form-control" placeholder="Please enter product name*" required="required" data-error="product name is required." value="<?php echo $product?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cost*</label>
                            <input id="form_cost" type="number" name="cost" class="form-control" placeholder="Please enter the product cost" required="required" data-error="Lastname is required." value="<?php echo $cost?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quantiy *</label>
                            <input id="form_quantity" type="number" name="quantity" class="form-control" placeholder="Please enter the no of quntities *" required="required" data-error="Valid quantity is required." value="<?php echo $quantity?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Model_no</label>
                            <input id="form_model_no" type="text" name="model" class="form-control" placeholder="Please enter the modle_no" value="<?php echo $model?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Category</label>
                            <input id="form_quantity" type="text" name="category" class="form-control" placeholder="Please enter the product Category *" required="required" data-error="[product category is required." value="<?php echo $category?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Sub_Category</label>
                            <input id="form_sub_category" type="text" name="sub_category" class="form-control" placeholder="Please enter the product sub_category" value="<?php echo $sub_category?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label>Image</label>
                            <input id="form_image" type="file" name="image" class="form-control" placeholder="Please upload the product image" value="<?php echo $image?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label">Product Description *</label>
                            <input id="form_model_no" type="text" name="description" class="form-control" placeholder="Please enter the modle_no" value="<?php echo $description?>">
                            <div class="help-block with-errors"></div>
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
</div> -->

</body>
</html>