<?php
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
    echo "successfull connection";
}
$sql="INSERT INTO `users` (`serial no.`, `name`, `email`, `age`, `gender`, `locality`, `contact no.`) VALUES ('2', 'second', 'second11@gmail.com', '22', 'male', 'jhansi', '8282828282')";

if(mysqli_query($conn,$sql))
{
    echo "success";
}
else{
    echo "error". mysqli_error($conn);
}

mysqli_close($conn);
?>