<!document html>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
 $db=mysqli_connect('localhost','root','','aditya') OR die("Iam unableto connect to Mysql");
$log="";
if(isset($_POST["submit"]))
{
$tx= (isset($_POST['username']) ) ? $_POST['username'] : '' ;
$pd = (isset($_POST['password']) ) ? $_POST['password'] : '';

 $rs="SELECT * FROM login WHERE name='$tx' AND password='$pd'";
 $res=mysqli_query($db,$rs);
 
 $permission=mysqli_fetch_array($res);
 
 $id=$permission[0];
 
     if($permission[0]=='')
        {
$message = "Incorrect Username or Password";
echo "<script type='text/javascript'>alert('$message');</script>";}
else
{   
   session_start();

      $_SESSION['valid_uid']=$id;
	 

	header("Location:childpage.php?id=$id");
}
}
?>       

