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
	<title>Dr.NGP Arts and Science College</title>
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
		.parallax{
			position: relative;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.parallax img{
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
		}
		#text{
			position: absolute;
			top: 50%;
			transform: translateY(-50px);
			font-size: 4em;
			color: #112434;
		}
		.sec{
			position: relative;
			padding: 100px;
			background: #112434;
		}
		.sec h2{
			text-align: center;
			font-size: 3em;
			color: #fff;
			margin-bottom: 10px;
		}
		.sec p{
			text-align: center;
			font-size: 1.2em;
			color: #fff;
			font-weight: 300;
		}
		
	</style>
</head>
<body>
	<header>
		<a href="#" class="logo">DRNGPASC Portal</a>
		<ul class="navigation">
			<li><a href="#" class="active">Home</a></li>
			<li><a target="_blank" href="https://www.drngpasc.ac.in/">Website</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="user/login.php">Student</a></li>
			<li><a href="staff/login.php">Staff</a></li>
			<li><a href="admin/login.php">Admin</a></li>
		</ul>
	</header>
	<section class="parallax">
		<h2 id="text">Welcome You</h2>
		<img src="./images/mountain_01.png" id="m1">
		<img src="./images/trees_02.png" id="t2">
		<img src="./images/mountain_02.png" id="m2">
		<img src="./images/trees_01.png" id="t1">
		<img src="./images/man.png" id="man">
		<img src="./images/plants.png" id="plants">
	</section>
	<section class="sec">
		<h2 id="about">About Dr.NGPASC</h2>
		<p>Dr.N.G.P. Arts and Science College (Dr. NGPASC) is an organization of KMCRET (Kovai Medical Center Research and Educational Trust) was established in the academic year 1997-98 under the leadership of Dr. Nalla G.Palaniswami as Chairman and Dr.Thavamani D.Palaniswami as Secretary. It is a co-educational self financing autonomous institution, affiliated to Bharathiar University, Coimbatore, Tamil Nadu. The College began its educational journey with 4 Under Graduate programmes, now it is emerging as the one of the top self-financing colleges in Tamil Nadu.<br>The institution is recognized under 2(f) & 12(B) and conferred autonomous status during the academic year 2015-16 by University Grants Commission, New Delhi and is accredited with A++ Grade (3rd Cycle) by NAAC. Four of our science departments are recognized under DBT-STAR Scheme. MHRD’s Institution Innovation Council (IIC) was established to cater for the innovation and undergraduate research among students. In addition, Dr. NGPASC is recognized as a member of National Rural Entrepreneurship Mission by Mahatma Gandhi National Council of Rural Education, Ministry of Education, Government of India and Scientific and Industrial Research Organisations (SIROs) by Department of Scientific and Industrial Research, DST, Government of India.<br>
	</section>
	<div class="testimonials">
	<div class="container">
			<div class="testimonial-nfo">
        <h3>Public Notices</h3>
         <marquee  style="height:350px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();">
				<?php
$sql="SELECT * from tblpublicnotice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

 
		<a href="view-public-notice.php?viewid=<?php echo htmlentities ($row->ID);?>" target="_blank" style="color:#fff;">
          <?php  echo htmlentities($row->NoticeTitle);?>(<?php  echo htmlentities($row->CreationDate);?>)</a>
          <hr /><br />
				    
			<?php $cnt=$cnt+1;}} ?>
	</marquee></div>
	</div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
    	gsap.from("#m1",{
    		scrollTrigger : {
    			scrub: true
    		},
    		y: 100,
    	})
    	gsap.from("#m2",{
    		scrollTrigger : {
    			scrub: true
    		},
    		y: 50,
    	})
    	gsap.from("#t2",{
    		scrollTrigger : {
    			scrub: true
    		},
    		x: -50,
    	})
    	gsap.from("#t1",{
    		scrollTrigger : {
    			scrub: true
    		},
    		x: 50,
    	})
    	gsap.from("#man",{
    		scrollTrigger : {
    			scrub: true
    		},
    		x: -250,
    	})
    	gsap.from("#plants",{
    		scrollTrigger : {
    			scrub: true
    		},
    		x: -50,
    	})

    	gsap.from("#about",{
    		scrollTrigger : {
    			scrub: true
    		},
    		x: -150,
    	})
    </script>
    <?php include_once('includes/footer.php');?>
</body>
</html>