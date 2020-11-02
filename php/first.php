<?php
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$mob=$_POST['mob'];
$email=$_POST['email'];


$servername="localhost";
$username="root";
$password="";
$database="gym";

$conn =mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("failed to connect".mysqli_connect_error());

}
else{
    echo "successfull Registration";
}
$sql="INSERT INTO `users` (`serial no.`, `name`, `email`, `age`, `gender`, `locality`, `contact no.`) VALUES ('2', '$name', '$email', '$age', '$gender', '$city', '$mob')";

if(mysqli_query($conn,$sql))
{
    echo "success";
}
else{
    echo "error". mysqli_error($conn);
}

mysqli_close($conn);
?>


