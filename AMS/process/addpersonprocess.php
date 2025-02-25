<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$attandance = 0;
$birthday =$_POST['birthday'];

//echo "$gender";

$sql = "INSERT INTO `person` (`firstName`, `lastName`, `email`, `birthday`, `gender`, 
`contact`, `address`, `attandance`) VALUES ('$firstname','$lastName','$email',
'$birthday','$gender','$contact','$address',$attandance)";

$result = mysqli_query($conn, $sql);
if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewperson.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert($sql)
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>