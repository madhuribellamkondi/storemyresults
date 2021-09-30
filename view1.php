<?php
session_start();
$conn = mysqli_connect("localhost","root","","a_student");
$r=$_SESSION['usn'];
$q = " SELECT*FROM sem1 WHERE usn = '$r'" ;
$result=mysqli_query($conn,$q);
$t=mysqli_num_rows($result);
if(!$t>0){
    echo "No Records";
    if(isset($_SESSION['usn'])){
        header("Location:welcome.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-Student Score Details</title>
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
    <?php
    $rows=mysqli_fetch_assoc($result);
    ?>
        <h1 class="d-flex justify-content-center">SEM1-MARKS</h1>
    <h3 class="d-flex justify-content-center"><?php echo $_SESSION['usn']." - ".$rows['name']; ?></h3>
   <div class="p-5">
    
   <table class="table table-striped table-hover">
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        
        <tr>
            <td><?php echo $rows['sub1']?></td>
            <td><?php echo $rows['mark1']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['sub2']?></td>
            <td><?php echo $rows['mark2']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['sub2']?></td>
            <td><?php echo $rows['mark2']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['sub3']?></td>
            <td><?php echo $rows['mark3']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['sub4']?></td>
            <td><?php echo $rows['mark4']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['sub5']?></td>
            <td><?php echo $rows['mark5']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['sub6']?></td>
            <td><?php echo $rows['mark6']?></td>
        </tr>
        <tr>
            <th>SGPA</th>
            <th>CGPA</th>
        </tr>
        <tr>
            <td><?php echo $rows['sgpa']?></td>
            <td><?php echo $rows['cgpa']?></td>
        </tr>
    </table>
    <button type="button" class="btn btn-info btn shadow px-5"><a href="back.php" style="text-decoration:none;color:black;">Back</a></button>
   </div>
   
</body>
</html>