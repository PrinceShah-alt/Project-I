<?php
$server="localhost";
$user="root";
$password="";
$dbname="project";

$conn=new mysqli($server,$user,$password,$dbname);
if($conn->connect_error){
    die("connection unsuccessful");
}
else{
    echo"connection successful";
}

if(isset($_GET['username']) && isset($_GET['useremail']) && isset($_GET['userdate']) && isset($_GET['usertime']) && isset($_GET['userseat'])&& isset($_GET['buttom'])){
    $uname=$_GET['username'];
    $uemail=$_GET['useremail'];
    $udate=$_GET['userdate'];
    $utime=$_GET['usertime'];
    $useat=$_GET['userseat'];

    $sql="INSERT INTO form(Name,Email,Date,Time,seats) VALUES('$uname','$uemail','$udate','$utime','$useat')";

    if($conn->query($sql)===TRUE){
        echo"Data is inserted in table";
    }
    else{
        echo"Data not inserted: " . $conn->error;
    }
}
else{
    echo"Error: Missing form data!";
}

$conn->close();
?>