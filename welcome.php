<?php
session_start();
if(!isset($_SESSION['usn'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-Student Details</title>
    <link rel="stylesheet" href="marks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="./icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/1fcd11c729.js" crossorigin="anonymous"></script>
    <script src="marks.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js" ></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <section class="h-100 h-custom" id="totalcontainer" style="background-image: url(./lbi.jpg);background-size: cover;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card rounded-3">
                <img src="./d1.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                <div class="card-body p-4 p-md-5" >
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Enter Details</h3>
                  <h3><?php echo "WELCOME ".$_SESSION['usn']; ?></h3>
                    <form >
                        <div class="d-flex mt-3 justify-content-around">
                        <a href="sem1.php" class="btn btn-success px-4" role="button">SEM-1</a>
                        <a href="sem2.php" class="btn btn-success px-4" role="button">SEM-2</a>
                        <a href="sem3.php" class="btn btn-success px-4" role="button">SEM-3</a>
                        <a href="sem4.php" class="btn btn-success px-4" role="button">SEM-4</a>
                        <a href="sem5.php" class="btn btn-success px-4" role="button">SEM-5</a>
                        <a href="sem6.php" class="btn btn-success px-4" role="button">SEM-6</a>
                        <a href="sem7.php" class="btn btn-success px-4" role="button">SEM-7</a>
                        <a href="sem8.php" class="btn btn-success px-4" role="button">SEM-8</a>
                        </div>
                        <div class="mt-4 d-flex justify-content-around">
                        <a href="view1.php"  class="btn btn-primary px-2" role="button">VIEW-SEM1</a>
                        <a href="view2.php"  class="btn btn-primary px-2" role="button">VIEW-SEM2</a>
                        <a href="view3.php"  class="btn btn-primary px-2" role="button">VIEW-SEM3</a>
                        <a href="view4.php"  class="btn btn-primary px-2" role="button">VIEW-SEM4</a>
                        <a href="view5.php"  class="btn btn-primary px-2" role="button">VIEW-SEM5</a>
                        <a href="view6.php"  class="btn btn-primary px-2" role="button">VIEW-SEM6</a>
                        <a href="view7.php"  class="btn btn-primary px-2" role="button">VIEW-SEM7</a>
                        <a href="view8.php"  class="btn btn-primary px-2" role="button">VIEW-SEM8</a>
                        
                        </div>
                        <a href="logout.php" class="btn btn-danger shadow btn-lg mt-3 col-md-12" role="button">LOG OUT</a>
                    </form>
                  
      
                </div>
                
                
                
              </div>
            </div>
          </div>
        </div>
      </section>

</body>

</html>

