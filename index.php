<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Smart Bank</title>
    <?php
  include 'navbar.php';
  ?>
  </head>

  <body>
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <br><br>
                  <h1> SMART BANK </h1>
                  <p> <b> One stop solution for Banking </b></p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank2.png" class="img-fluid pt-2" >
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                  <br><br>
                    <img src="img/user.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">View Customers</button></a>
                  </div>
                  <div class="col-md act">
                  <br><br>
                    <img src="img/history.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
                  <br><br>
            </div>
            
      </div>
      
      <footer class="text-center py-2">
        <p> Made by  <b> Advait Dhamnaskar </b> <br> As Intern at <b> The Sparks Foundation. </b> </p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
    </body>
</html>