<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Dhiemas Ganisha - Web Developer</title>

	<link rel="shortcut icon" href="{{ asset('/template/assets/images/gt_favicon.png') }}">
	
	<!-- Bootstrap -->
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset('/template/assets/css/styles.css') }}">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

@include('template.navbar')

@yield('content')

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+62 878 9829 2270<br>
						<a href="mailto:dhiemasganisha9a@gmail.com">dhiemasganisha9a@gmail.com</a><br>
						<br>
						Bandung, Jawa barat
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href=""><i class="fa fa-twitter fa-2"></i></a>
						<a href=""><i class="fa fa-dribbble fa-2"></i></a>
						<a href=""><i class="fa fa-github fa-2"></i></a>
						<a href=""><i class="fa fa-facebook fa-2"></i></a>
					</p>
				</div>
			</div>
			<div class="col-md-3 widget"></div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Tentang</h3>
				<div class="widget-body">
					<p>Saya, Dhiemas Ganisha, Web Programmer yang siap membantu anda untuk membuatkan website atau bahkan <i>mobile application</i> untuk bisnis anda.</p>
				</div>
			</div>

			<!-- <div class="col-md-3 widget">
				<h3 class="widget-title">Form widget</h3>
				<div class="widget-body">
					<p>+62 878 9829 2270<br>
						<a href="mailto:dhiemasganisha9a@gmail.com">dhiemasganisha9a@gmail.com</a><br>
						<br>
						Bandung, Jawa barat
					</p>	
				</div>
			</div> -->

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 widget">
			</div>

			<div class="col-md-4 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; {{ date('Y') }}, Dhiemas Ganisha<br> 
				</div>
			</div>

			<div class="col-md-4 widget">
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset('/template/assets/js/template.js') }}"></script>
</body>
</html>
