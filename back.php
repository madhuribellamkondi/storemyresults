<?php
session_start();
if(isset($_SESSION['usn'])){
    header("Location:welcome.php");
}