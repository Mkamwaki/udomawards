<?php
  require_once("voteserver.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominees | UDOM Awards</title>

    <!-- include bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
     <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 



<script>
  // Initialize the agent at application startup.
  const fpPromise = import('https://fpcdn.io/v3/oizHKuBu6swhTe0qhSYQ')
  .then(FingerprintJS => FingerprintJS.load())

  // Get the visitor identifier when you need it.
  fpPromise
  .then(fp => fp.get())
  .then(result => {
      // This is the visitor identifier:
      const visitorId = result.visitorId;
      

      document.getElementById("voter_id").value = visitorId;
  })
  </script>

  <!-- <script>  
    var delayInMilliseconds = 10000; //1 second

    setTimeout(function() {
      //your code to be executed after 1 second
    }, delayInMilliseconds);
  </script> -->

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
                <a class="nav-link active"  style="color: orange;" href="vote.php">VOTE</a>
              </li>
             
            </ul>
          </div>
        </div>
    
    </nav>
    <marquee style="margin-top: 75px;" behavior="" direction="">The final day of voting is 6<sup style="color: rgb(250, 205, 3);">th</sup> may, 2022 at 0000</marquee>
      
    <div class="container" style="max-width: 800px;">        

        <form action="" method="POST" name="form1">
          <?php
            if(isset($_GET["name"]) && isset($_GET["id"])){
              $category_name = $_GET["name"];?>
              <h3 class="pb-2 mt-lg-3 heading" style="color: white;"><?php echo $category_name; ?></h3>

              <?php
              $id = $_GET["id"];
              $_SESSION["cookie"] = $id;
              
              $fetch_query = "SELECT cont_number,id FROM votes WHERE category_id=$id";
              $fetch_result = mysqli_query($conn, $fetch_query);
                
              if($fetch_result){
                if(mysqli_num_rows($fetch_result) > 0){
                  while($contestant = mysqli_fetch_assoc($fetch_result)){
                    // get contestant name and photo from contestant_id
                    $contestant_id = $contestant["cont_number"];
                    $vote_id=$contestant["id"];

                    $contestant_query = "SELECT name FROM contestant WHERE cont_number=$contestant_id";
                    $contestant_result = mysqli_query($conn, $contestant_query);
          
                    if($contestant_result){
                      if(mysqli_num_rows($contestant_result) > 0){
                        $temp = mysqli_fetch_assoc($contestant_result);
                        $contestant_name = $temp["name"];?>

                        <!-- single nominee -->
                        <div class="my-2 custom-border">
                          <div class="row align-items-start">
                              <div class="col-3">
                                  <img src="one.jpg" alt="nominee one" class="img-fluid rounded pe-auto" style="min-height: 82px; min-width: 84px;">
                              </div>
                              <div class="col-9">
                                  <h3 class="fw-bold" style="color: whitesmoke"><?php echo "$contestant_name";?></h3>

                                  <div class="row align-items-center p-0 m-0">
                                      <div class="col-9 p-0 m-0">
                                          <span style="color: whitesmoke">TA22<?php echo $contestant_id;?></span>
                                      </div>

                                      <div class="col">
                                          <input class="form-check-input mb-1 pb-1" name="vote"  style="width:30px; height: 30px;" value="<?php echo $vote_id;?>" type="radio" id="radio">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <?php
                  }
                }
              }
            }
          }
        }
        ?>
      </div>
        
      <!-- submit vote button -->
      <input type="text" name="voter_id" id="voter_id">

      <div class="text-center py-1 fixed-bottom container bg-dark" style="max-width: 800px;">
          <button type="submit" id="vote_button" name="vote_button" style="border: 1px solid orange; border-radius: 5px; color: orange;" class="btn px-5 my-button">vote</button>
      </div>
    </form>

    <footer class="mt-5 mb-5 container" style="color: white;">
        <div class="row">
          <div class="col-sm-4">
            <h5>About us</h5>
            <p>
              From the University of Dodoma, we are an organisation that brings the best out of students through their talents. We were founded in 2010 by UDOSO (University of Dodoma Students Organization), and since then graduating students have never been the same.
            </p>
          </div>
          <div class="col-sm-4">
          <h5>Contact us..</h5>
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
          <form  style="text-align: center;">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" style="width: 70%; margin: auto;" required>
                
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 70%; margin: auto;" required>
              </div>
              
              <br>
              
              <button type="submit" class="btn disabled btn-primary">Submit</button>
            </form>
          </div>
  
        </div>
        <div class="row" style="text-align: center;">
          <p>
            developed by <a href="#">Skyline Software</a>
          </p>
        
              
        </div>
      </footer>
    
    <script>
        function viewMore(id){
            var item = document.getElementById(id);

            if(item.style.display == "none"){
                item.style.display = "block";
            }
            else{
                item.style.display = "none";
            }
        }
    </script>

</body>
</html>