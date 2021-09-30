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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Marks Info</h3>
      
                  <form class="px-md-2" action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                         <div class="form-outline">
                             <input type="text" name="name" id="nid" class="form-control" required/>
                             <label class="form-label" for="nid">Name</label>
                             </div> 
                        </div>
                         <div class="col-md-6 mb-3">
                             <div class="form-outline">
                                 <input type="text" name="usn" id="uid" class="form-control" required/>
                                 <label class="form-label" for="uid">USN</label>
                             </div>  
                         </div>      
                     </div>
                      <div id="dyf">
                        
                         <div>
                             <h2 class="p-2" >-SEM1-</h2>
                             <input type="hidden" name="cou[]"/>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s1" class="form-control" id="sem1s1"/>
                               <label for="sem1s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s2" class="form-control" id="sem1s2"/>
                               <label for="sem1s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s3" class="form-control" id="sem1s3"/>
                               <label for="sem1s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s4" class="form-control" id="sem1s4"/>
                               <label for="sem1s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s5" class="form-control" id="sem1s5"/>
                               <label for="sem1s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s6" class="form-control" id="sem1s6"/>
                               <label for="sem1s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m1" class="form-control" id="sem1m1"/>
                                 <label for="sem1m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m2"  class="form-control" id="sem1m2"/>
                                 <label for="sem1m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m3" class="form-control" id="sem1m3"/>
                                 <label for="sem1m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m4" class="form-control" id="sem1m4"/>
                                 <label for="sem1m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m5" class="form-control" id="sem1m5"/>
                                 <label for="sem1m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m6" class="form-control" id="sem1m6"/>
                                 <label for="sem1m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa1" class="form-control" id="sg1" required/>
                                   <label for="sg1" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa1" class="form-control" id="cg1" required/>
                                   <label for="cg1" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s1b1" id="sem1b1" value="Yes"/>
                                       <label class="form-check-label" for="sem1b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s1b1" id="sem1b2" value="No"/>
                                         <label class="form-check-label" for="sem1b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      
                      
                   
      
                   
      
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                     
                    </div>
                  <div class="row justify-content-md-cnter">
                  <button type="submit"name="sub" id="submit"class="btn btn-success shadow btn-lg col mb-1">Submit</button>
                  </div>
                    
                    
                    <!-- <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
      
                  </form>
      
                </div>
                
                <div class="p-4 d-flex justify-content-around">
                <button id="download" class=" btn btn-primary shadow ">Download PDF</button>
                <button type="button" class="btn btn-danger btn shadow px-5"><a href="back.php" style="text-decoration:none;color:black;">Back</a></button>
                              
                </div>
                
                     
                
                
               
                
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
<?php
$conn = mysqli_connect("localhost","root","","a_student");

error_reporting(0);
$name=$_POST['name'];
  $usn=$_POST['usn'];
  $sub11=$_POST['s1s1'];
  $mark11=$_POST['s1m1'];
$sub21=$_POST['s1s2'];
  $mark21=$_POST['s1m2'];
$sub31=$_POST['s1s3'];
  $mark31=$_POST['s1m3'];
$sub31=$_POST['s1s3'];
  $mark31=$_POST['s1m3'];
$sub41=$_POST['s1s4'];
  $mark41=$_POST['s1m4'];
$sub51=$_POST['s1s5'];
  $mark51=$_POST['s1m5'];
$sub61=$_POST['s1s6'];
  $mark61=$_POST['s1m6'];
$sgpa1=$_POST['sgpa1'];
$cgpa1=$_POST['cgpa1'];
$bl1=$_POST['s1b1'];

 
if(isset($_POST['sub']) ){
  

    
      $query1= "INSERT INTO sem1(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,cgpa,sgpa,bl) VALUES('$name','$usn','$sub11','$mark11','$sub21','$mark21','$sub31','$mark31','$sub41','$mark41','$sub51','$mark51','$sub61','$mark61','$cgpa1','$sgpa1','$bl1' )";
      $result = mysqli_query($conn,$query1);
      
      
        if($result){
            echo "<script>alert('Registered Successfully!!')</script>";
        }
        else{
            echo "<script>alert('Oops USN already exists!')</script>";
        }
        
 

}


?>
</html>

