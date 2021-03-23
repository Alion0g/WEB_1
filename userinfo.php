<?php 

$con = mysqli_connect('localhost','root');

if ($con){
	echo "Submite Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'youtubeuserdata');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (name, email, phone, comment) 
values ('$name','$email', $phone,'$comment') ";

mysqli_query($con, $query);

?>