<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Notice | Dr.NGP Arts and Science College</title>
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
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
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
<!--/script-->
<style>
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
			<li><a href="contact.php">Contact</a></li>
			<li><a href="user/login.php">Student</a></li>
			<li><a href="#">Staff</a></li>
			<li><a href="admin/login.php">Admin</a></li>
		</ul>
	</header>
<!--weelcome-->
<div class="welcome">
	<div class="container">
		<table border="1" class="table table-bordered mg-b-0">
                      <?php
$vid=$_GET['viewid'];
$sql="SELECT * from tblpublicnotice where ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
 <tr align="center" class="table-warning">
<td colspan="4" style="font-size:30px;color:blue">
 Notice</td></tr>
<tr class="table-info">
    <th style="color:black;">Notice Announced Date</th>
    <td style="color:black;"><?php  echo $row->CreationDate;?></td>
  </tr>
    <tr class="table-info">
    <th style="color:black;">Noitice Title</th>
    <td style="color:black;"><?php  echo $row->NoticeTitle;?></td>
  </tr>
  <tr class="table-info">
     <th style="color:black;">Message</th>
    <td style="color:black;"><?php  echo $row->NoticeMessage;?></td>
     
  </tr>
  
  <?php $cnt=$cnt+1;}} ?>
</table>
	</div>
</div>
<!--/welcome-->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
