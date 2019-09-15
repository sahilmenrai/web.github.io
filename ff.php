<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/ff.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/animate.min.css" type="text/css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC:600" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/parallax.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style><style>
		.rr {
			position: relative;
			width: 100%;
			box-sizing: border-box;
		}
		
		.row .column {
			box-sizing: border-box;
			overflow: hidden;
			padding: 0;
			margin: 0;
			position: relative;
		}
		
		.row .column:before {
			content: '';
			position: absolute;
			top: 0px;
			width: 100%;
			left: 0;
			height: 100%;
		}
		
		.row .column .imgbox {
			position: relative;
		}
		
		.row .column .imgbox img {
			width: 100%;
			transition: 5s;
		}
		
		.row .column:hover .imgbox img {
			transform: scale(1.2);
		}
		
		.row .column .details {
			position: absolute;
			bottom: -85px;
			left: 0;
			/*padding: 10px;*/
			box-sizing: border-box;
			background: rgba(0, 0, 0, .9);
			width: 100%;
			transition: .5s;
		}
		
		.row .column:hover .details {
			bottom: 0px;
		}
		
		.row .column .details h3 {
			margin: 0;
			padding: 0;
			font-size: 20px;
			color: #F1F1F1;
			font-weight: 400px;
			text-align: right;
			text-transform: uppercase;
		}
		
		.row .column .details h3 span {
			margin: 0;
			padding: 0;
			font-size: 10px;
			color: #f00;
			font-weight: 900;
			text-transform: uppercase;
			position: relative;
			top: -6px;
		}
		
		.row .column .details ul {
			margin: 0;
			padding: 0;
			float: right;
			display: flex;
		}
		
		.row .column .details ul li {
			list-style: none;
		}
		
		.row .column .details ul li a {
			padding: 0 10px;
			color: #fff;
		}
		
		.row .column .details ul li a .fa {
			transition: .5s;
		}
		
		.row .column .details ul li a:hover .fa {
			transform: rotateY(360deg);
			color: #f00;
		}
	
	</style></style>

</head>

<body>
	<section id="footer" style="margin-top: 35px;">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h5>Contact Details</h5>
					<ul class="list-unstyled quick-links">
						<li><a href=""><i class="fa fa-map-marker"></i> 7/230 Church Street Richmond Victoria 3121</a></li>
						<li><a href=""><i class="fa fa-phone"></i> Phone: 03 94281198</a></li>
						<li><a href=""><i class="fa fa-fax"></i>Fax: 03 94290819 </a></li>
						<li><a href=""><i class="fa fa-skype"></i> Skype: dagama.pereirausa</a></li>
						
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="aboutus.php"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="core1.php"><i class="fa fa-angle-double-right"></i>Our Core Values</a></li>
						<li><a href="faq.php"><i class="fa fa-angle-double-right"></i>FAQS</a></li>
						<li><a href="contact.php" title=""><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="fess.php"><i class="fa fa-angle-double-right"></i>Fees Payment & Pricing</a></li>
						<li><a href="business.php"><i class="fa fa-angle-double-right"></i>Business Visa</a></li>
						<li><a href="spons.php"><i class="fa fa-angle-double-right"></i>Sponsoring Employees</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Book an Appointment</a></li>
						<li><a href="imprtlinks.php" title=""><i class="fa fa-angle-double-right"></i>Important Links</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">&copy; COPYRIGHT DAGAMA PEREIRA AND ASSOCIATES PTY LTD 2016. ALL RIGHTS RESERVED. | PRIVACYPOLICY</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="" target="_blank">DAGAMA PEREIRA</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
</body>
</html>