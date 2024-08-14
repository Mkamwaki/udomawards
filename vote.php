<?php  require ("staff/login.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories | UDOM Awards</title>

    <!-- include bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script source="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <script source="bootstrap/js/bootstrap.min.js"></script>
 <link href="http://127.0.0.1:80/bs5/css/bootstrap.min.css" rel="stylesheet">
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 



</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="logo.jpeg" alt="..." height="50" width="100">
      
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="color: orange;" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  style="color: orange;" href="#">VOTE</a>
          </li>
         
        </ul>
      </div>
    </div>

  </nav>
  <marquee style="margin-top: 75px;" behavior="" direction="">Select a category to view its contestants</marquee>
  

    <div class="container"  style="max-width: 800px;">
        <h3 class="pb-2 mb-3 mt-lg-3 heading" style="color:white;">Award Categories</h3>

        <!-- single category -->
        <?php
          $selection_query = "SELECT id, name FROM category";
          $selection_result = mysqli_query($conn, $selection_query);

          if($selection_result){
            if(mysqli_num_rows($selection_result) > 0){
              $x=0;
              while($category = mysqli_fetch_assoc($selection_result)){
                $id = $category["id"];
                $x++;
                
                ?>
            

              <a style="text-decoration: none;" href="contestants.php?name=<?php  echo $category["name"]?>&id=<?php echo $id;?>">
                  <div class="card my-2 custom-border bg-dark">
                    <div class="card-body">            
                      <p class="card-text">  <?php echo $x;?>.  <?php echo $category["name"]; ?></p>
                    </div>
                  </div>
                </a>

              <?php
              }
            }
          }
        ?>

    </div>
    
    <footer class="mt-5 container" style="color:white;">
    <div class="row">
          <div class="col-sm-4 px-1">
            <h5>About us</h5>
            <p>
              From the University of Dodoma, we are an organisation that brings the best out of students through their talents. We were founded in 2010 by UDOSO (University of Dodoma Students Organization), and since then graduating students have never been the same.
            </p>
          </div>
        <div class="col-sm-4">
        <h5>Contact us</h5>
          </br>  
          <ul>  
          <li>   
          <a href="#"><i class="fa fa-facebook"></i>Link to facebook </a>  
          </li>  
          <li>  
          <a href="#"><i class="fa fa-twitter"></i>Link to twitter</a>
          </li>  
           <li>
          <a href="https://www.instagram.com/udom_awards2022/"><i class="fa fa-instagram"></i>link to instagram</a>
          </li>  
          <li>  
          <a href="#"><i class="fa fa-youtube"></i>Link to youtube</a>
          </li>  
          
          </ul>  
        </div>
        <div class="col-sm-4">
        <form method="post" action="" style="text-align: center;">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" style="width: 70%; margin: auto;" required>
                
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" style="width: 70%; margin: auto;" required>
              </div>
              <span style="color:red;"><?php echo $error; ?></span>
              <br>
              
              <button type="submit" class="btn btn-primary" name="login" >Submit</button>
            </form>
        </div>

      </div>
      <div class="row" style="text-align: center;">
        <p>
          developed by <a href="#">Skyline Software</a>
        </p>
      
                            
      </div>
    </footer>

</body>
</html>