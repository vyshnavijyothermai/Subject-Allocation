<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$db=mysqli_connect("localhost","root","","aditya") or die("Unable to connect");

$msg='';
$msg1='';
$i=0;
if(isset($_POST['submit']))
{
 $name=$_POST['pname'];
 $rs="SELECT * FROM form WHERE faultyname='$name'";
 $res=mysqli_query($db,$rs);
 
 while($info=mysqli_fetch_array($res))
    {
        $msg='<tr><td>'.$info[1].'</td><td style="padding-left:50px;">'.$info[3].'</td></tr>
             <tr><td>'.$info[2].'</td><td style="padding-left:50px;">'.$info[4].'</td></tr>
             <tr><td>'.$info[5].'</td><td style="padding-left:50px;">'.$info[7].'</td></tr>
             <tr><td>'.$info[6].'</td><td style="padding-left:50px;">'.$info[8].'</td></tr>
             <tr><td>'.$info[9].'</td><td style="padding-left:50px;">'.$info[11].'</td></tr>
             <tr><td>'.$info[10].'</td><td style="padding-left:50px;">'.$info[12].'</td></tr>
             <tr><td>'.$info[1].'</td><td style="padding-left:50px;">'.$info[3].'</td></tr>';
    }
}
 
 $li="SELECT * FROM admin";
  $lis=mysqli_query($db,$li);
  
   while($list=mysqli_fetch_array($lis))
    
   {
          $msg1='<tr><td>'.$list[0].'</td><td>'.$list[1].'</td><td>'.$list[2].'</td></tr>'; 
      }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IT DEPARTMENT Admin login page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Different Multiple Form Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web font -->
    <style>
        .logout{
         margin-left: 1280px;  
        }
        button{
         margin-top:20px;
           margin-left:-15px;
            padding: 10px;
         border: 1px solid ;
            background-color:crimson;
        }
        #in{
            color: white;
        }
       
    </style>
</head>
<body>
	<!-- main -->
    
    <div class="logout"><button><a href="mainpage.html">LOGOUT</a></button></div>
    
	<div class="main-agile">

		<h1>ADMIN PAGE</h1>
      
		<div class="content">
			<div class="top-grids">
				<div class="top-grids-left">
					<div class="signin-form-grid">
						<div class="signin-form">
                            <div class="form1">
                                <h2>Allocation form filled by faculty</h2>
                                <table id="in" style="margin-left:30px;">
                                    <tr><td>CHOICE</td><td style="padding-left:20px;">PREFERENCE</td> </tr>
                                     <?php echo $msg; ?>
                                </table>
                                
                            </div>
						</div>
						
					</div>
					<div class="signin-form signup-form"> 
                        <div class="form2">
                        <h3>Final list</h3>
                            <table id="in">
                                <th>Faculty Name</th><th>Subject1</th><th>Subject2</th>
                                <?php echo $msg1; ?>
                            </table>
                        </div>
					</div>
					<div class="signin-form send-mail">
                          <h3>Send PDF</h3>
						<form>
                            
                           <input type="submit" value="post" name="post" >
                               </form>
                       
					</div>
                </div>
				<div class="top-grids-right">
					<div class="signin-form reset-password">
						<h3>Reset Password</h3>
						<form action="#" method="post">
							<input type="password" placeholder="Password" name="Password" required="">
							<input type="password" placeholder="Repeat Password" name="Repeat Password" required="">
							<input type="submit" class="send" value="Update Password">
						</form>
                    </div>
					<div class="signin-form recover-password">
						<h3>Search</h3>
						<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
							<input type="text" placeholder="Faulty Name" name="pname" required="">
							<input type="submit" name="submit" class="get" value="Get">
							
						</form>
					</div>
				
					<div class="signin-form task-grid">	
						<h3>Allocation Form</h3>
						<form method="post" action="adminform.php">
							<input type="text" name="name" placeholder="Faculty Name" required="">
							<input type="text" name="sub1" placeholder="Subject1" required="">
                            <input type="text" name="sub2" placeholder="Subject2" required="">
                            
 
												<input type="submit" value="Submit" name="submit">
						</form>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="copyright">
			<p> © 2017 IT DEPARTMENT | All rights reserved</p>
		</div>
	</div>	
	<!-- //main --> 
</body>
</html>