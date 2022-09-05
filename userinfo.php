<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo"connection sucessful";
}else{
        echo "No connection";
    }

mysqli_select_db($con, 'rearanimals data');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into rearanimals data('user','email','mobile','comments')
values ('$user','$email','$mobile','$comments')";
 
echo "$query";

header('location:index.php');


?>