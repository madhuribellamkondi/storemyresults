<?php
$connect = mysqli_connect("localhost","root","","a_student");
$number = count($_POST["cou"]);
if($number >=1 && isset($_POST['s1b1']))
{
	for($i=0; $i<$number; $i++)
	{
	$name=$_POST['name'];
    $usn=$_POST['usn'];
    $sub1=$_POST['s1s1'];
    $mark1=$_POST['s1m1'];
	$sub2=$_POST['s1s2'];
    $mark2=$_POST['s1m2'];
	$sub3=$_POST['s1s3'];
    $mark3=$_POST['s1m3'];
	$sub3=$_POST['s1s3'];
    $mark3=$_POST['s1m3'];
	$sub4=$_POST['s1s4'];
    $mark4=$_POST['s1m4'];
	$sub5=$_POST['s1s5'];
    $mark5=$_POST['s1m5'];
	$sub6=$_POST['s1s6'];
    $mark6=$_POST['s1m6'];
	$sgpa=$_POST['sgpa1'];
	$cgpa=$_POST['cgpa1'];
	$bl=$_POST['s1b1'];
	$k=1;
	$p=$k+$i;
	$f="sem$p";
	$sql = "INSERT INTO sem1(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,sgpa,cgpa,bl) VALUES($name,$usn,$sub1,$mark1,$sub2,$mark2,$sub3,$mark3,$sub4,$mark4,$sub5,$mark5,$sub6,$mark6,$sgpa.$cgpa,$bl )";
			
		
    $res=mysqli_query($connect, $sql);
	if($sql)echo "uyy";
	
    echo $usn[$i];
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter details";
}
?>