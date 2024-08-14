<?php  require ("staff/login.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDOM Awards 2022</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <script source="bootstrap/js/bootstrap.min.js"></script>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style>
    .class{
        margin:auto;
        margin-top:200px;
       
    }
    .form-label{
        color:white;
    }
</style>

</head>
<body style="background-color:black;">
    
          
<div class="col-sm-6 class" >
                    <h3 class="form-label" style="text-align:center;">TAHLISO AWARDS 2022 ADMIN PANEL</h3>

            <form method="post" action="" style="text-align: center;">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1"  style="width: 70%; margin: auto;" required>
                
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
          </body>
          </html>