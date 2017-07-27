<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$db=mysqli_connect("localhost","root","","aditya") or die("Unable to connect");


if(isset($_POST['submit']))
{
 $faultyname=$_POST['name'];
 $choice2=$_POST['choice2'];
 $pref1=$_POST['prefrence1'];
    $choice1=$_POST['choice1'];
    $pref2=$_POST['prefrence2'];
    $choice3=$_POST['choice3'];
    $choice4=$_POST['choice4'];
    $pref3=$_POST['prefrence3'];
    $pref4=$_POST['prefrence4'];
    $choice5=$_POST['choice5'];
    $choice6=$_POST['choice6'];
    $pref5=$_POST['prefrence5'];
    $pref6=$_POST['prefrence6'];
    $choice7=$_POST['choice7'];
    $choice8=$_POST['choice8'];
    $pref7=$_POST['prefrence7'];
    $pref8=$_POST['prefrence8'];
  
 $res="insert into form values('$faultyname','$choice1','$choice2','$pref1','$pref2','$choice3','$choice4','$pref3','$pref4','$choice5','$choice6','$pref5','$pref6','$choice7','$choice8','$pref7','$pref8')";
 
    $result=mysqli_query($db,$res);
 
 
 
 if($result)
 {
echo "success"; 
 }
 
else 
{
	header('location:http://www.facebook.com');
}
}
?>
