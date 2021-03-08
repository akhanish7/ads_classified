<?php
include("db.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments=$_REQUEST['comment'];


$query=mysqli_query($db_connect,"INSERT INTO feedback(u_name,email,remarks) VALUES('$name','$email','$comments')") or die(mysqli_error($db));


?>