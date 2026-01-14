<?php
/* database connection */
$servername="localhost";
$username="root";
$password="";
$dbname="RegistationForm";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
die("Connection failed: ". $conn->connect_error);
}
echo "Connection successfully formed". "<br>";
$n=$_REQUEST['Name'];
$e=$_REQUEST['Age'];
$p=$_REQUEST['Phone'];
$c=$_REQUEST['Username'];
$a=$_REQUEST['Email'];
$b=$_REQUEST['Password'];
$sql="insert into Registation values ('$n', '$e', '$p', '$c','$a','$b')";
if($conn->query($sql)===TRUE)
{
echo "Record inserted sucessfully.";
}
else
{
echo "Error : ".$conn->error;
}
$conn->close();
?>