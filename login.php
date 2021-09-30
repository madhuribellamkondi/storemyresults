<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="./icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/1fcd11c729.js" crossorigin="anonymous"></script>
    
    
    <title>All-in-Student</title>
</head>
<body>
    <section class="vh-100" style="background-image: url(./bg1.jpg);background-size: cover;">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card shadow-lg p-3 mb-5 bg-body" style="border-radius: 1rem;">
                <div class="row g-0">
                  
                  <div class="col-md-6 col-lg-5 d-flex align-items-center shadow-lg " style="border-radius: 1rem;">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="POST" action="#" enctype="multipart/form-data">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                        
                          <i class="fas fa-user-graduate fa-2x me-3" ></i>
                          <span class="h1 fw-bold mb-0">All-in-Student</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                        
                        <div class="form-outline mb-4">
                          <input type="text" name="usn" id="form2Example17" class="form-control form-control-lg" placeholder="Enter USN" required />
                          <label class="form-label" for="form2Example17">User_ID</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="pass" id="form2Example27" class="form-control form-control-lg" placeholder="Enter password" required />
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button type="submit" name="log" class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                        </div>
      
                        <a class="small text-muted" href="#!" style="text-decoration: none;">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #f7662d;text-decoration: none;">Register here</a></p>
                        
                      </form>
      
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-7 d-none d-md-block " >
                    <img
                      src="./mpic.jpg"
                      alt="login form"
                      class="img-fluid" style=" margin-top: 50px;padding-left: 5px; padding-top:45px; border-radius: 0 .5rem .5rem 0;"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     <?php
        $conn = mysqli_connect("localhost","root","","a_student");
        session_start();
      //   if(isset($_SESSION['usn'])){
      //     header("Location:welcome.php");
      // }
        if(isset($_POST['log'])){
          $usn=$_POST['usn'];
          $pass=$_POST['pass'];
          $sql="SELECT*FROM users WHERE usn='$usn' AND password='$pass'";
          $res=mysqli_query($conn,$sql);
          if(mysqli_num_rows($res)){
           
              $row = mysqli_fetch_assoc($res);
             $_SESSION['usn']=$row['usn'];
             header("Location:welcome.php");
          }
          else{
            echo "<script>alert('Oops USN or Password INCORRECT!')</script>";
          }
        }
     ?>
</body>
</html>