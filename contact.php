<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body{
			overflow-x: hidden;
			background: #fff;
			min-height: 100vh;
		}
		header{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			padding: 30px 100px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			z-index: 1000;
		}
		.logo{
			color: #112434;
			font-weight: 700;
			font-size: 2em;
			text-decoration: none;
		}
		.navigation{
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 40px;
		}
		.navigation li{
			list-style: none;
		}
		.navigation li a{
			text-decoration: none;
			padding: 6px 15px;
			color: #112434;
			border-radius: 20px;
		}
		.navigation li a:hover,
		.navigation li a.active{
			background: #112434;
			color: #fff;
		}
	</style>
</head>
<body>
	<header>
		<a href="#" class="logo">DRNGPASC Portal</a>
		<ul class="navigation">
			<li><a href="index.php">Home</a></li>
			<li><a href="https://www.drngpasc.ac.in/">Website</a></li>
			<li><a href="contact.php" class="active">Contact</a></li>
			<li><a href="user/login.php">Student</a></li>
			<li><a href="#">Staff</a></li>
			<li><a href="admin/login.php">Admin</a></li>
		</ul>
	</header>
	<div class="container">
		<h2></h2>
	</div>
</div>
<!--header-->
		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h3 class="c-text">Feel Free to contact with us!!!</h3>
				</div>
				
				<div class="contact-grids">
					<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="col-md-4 contact-grid-left">
						<h3>Address :</h3>
						<p><?php  echo htmlentities($row->PageDescription);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-middle">
						<h3>Phones :</h3>
						<p><?php  echo htmlentities($row->MobileNumber);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<p><?php  echo htmlentities($row->Email);?>
						</p>
					</div>
					<div class="clearfix"> </div>
					<?php $cnt=$cnt+1;}} ?>
				</div>
			</div>
			<!-- //container -->
		</div>
<?php include_once('includes/footer.php');?>
</body>
</html>