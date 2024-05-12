<?php
$en=$_POST['eventname'];
$et=$_POST['eventtype'];
$dt=$_POST['date'];
$tm=$_POST['time'];
$ve=$_POST['venue'];
$ef=$_POST['extraFeatures'];
$ft=$_POST['foodType'];
$ma=$_POST['maxAttendees'];
$con=mysqli_connect("localhost", "root","","eventiveregdb");
$sql="INSERT INTO evente (eventname, eventtype, date, time, venue, Features, foodType, maxAttendees) values ('$en', '$et', '$dt', '$tm', '$ve', '$ef', '$ft', '$ma')";
$r=mysqli_query($con,$sql);
if($r)
{
    //echo "REGISTRATION SUCCESSFULL";
    header("Location: transactions.html");
    exit();
}
else
{
    echo "RE-ENTER DETAILS..";
}
?>