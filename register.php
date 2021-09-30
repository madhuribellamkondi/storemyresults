<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="./icon.jpg">
    <script src="https://kit.fontawesome.com/1fcd11c729.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register</title>
</head>
<body>
    <section class="vh-100" style="background-image: url(./bg1.jpg);background-size: cover;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col col-xl-10">
              <div class="card shadow-lg p-3 card-registration" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-xl-6 p-3 d-none d-xl-block shadow " style="border-radius: 1rem;">
                    <img
                      src="./bg3.png"
                      alt="Sample photo"
                      class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                    />
                  </div>
                  <div class="col-xl-6">
                    <form class="card-body p-md-4 text-black" action="#" method="POST" enctype="multipart/form-data">
                      <h3 class="mb-5 text-uppercase">All-in-Student registration form</h3>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg" required />
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg" required />
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class=" mb-3">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m1" name="course" class="form-control form-control-lg" required />
                            <label class="form-label" for="form3Example1m1">Course</label>
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-outline">
                                <input type="text" id="form3Example90" name="usn" class="form-control form-control-lg" required />
                                <label class="form-label" for="form3Example90">USN</label>
                            </div>
                           
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <div class="form-outline ">
                                <input type="date" id="form3Example9" name="dob" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example9">DOB</label>
                            </div>
                          </div>
                      </div>
                      <div class="form-outline mb-3">
                        <input type="password" id="form3Example99" name="pass" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Example99">Password</label>
                      </div>
                      <div class="form-outline mb-3">
                        <input type="text" id="form3Example97" name="mail" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div>
                      <div class="d-flex justify-content-between p-2">
                      <button type="button" class="btn form-outline btn-light btn-lg shadow ms-2"><a href="logout.php" style="text-decoration:none;color:black;">Back</a></button>
                      <div class="d-flex justify-content-end pt-2">
                        <button type="reset" class="btn form-outline btn-light btn-lg shadow">Reset all</button>
                        <button type="submit" name="sub" class="btn btn-warning btn-lg ms-2 shadow">Submit form</button>
                      </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
$conn = mysqli_connect("localhost","root","","a_student");
error_reporting(0);
if(isset($_SESSION['usn'])){
          header("Location:login.php");
      }
if(isset($_POST['sub'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $course=$_POST['course'];
    $usn=$_POST['usn'];
    $dob=$_POST['dob'];
    $pass=$_POST['pass'];
    $mail=$_POST['mail'];
    $query= "INSERT INTO users(usn,firstname,lastname,course,dob,password,mail) VALUES('$usn','$fname','$lname','$course','$dob','$pass','$mail')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<script>alert('Registered Successfully!!')</script>";
        }
        else{
            echo "<script>alert('Oops USN already exists!')</script>";
        }
   

}


?>
</body>
</html>