<?php
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$pn=$_POST['phoneno'];
$em=$_POST['email'];
$con=mysqli_connect("localhost", "root","","eventiveregdb");
$sql="INSERT INTO register (FirstName, LastName, Phone, Email) values ('$fn', '$ln', '$pn', '$em')";
$r=mysqli_query($con,$sql);
if($r){
    header("Location: event.html");
    exit();
}
else{
    echo "RE-ENTER DETAILS..";
}
?>